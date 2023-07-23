<?php
include("db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<h1>Log in</h1>

    
        <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"> 
        
        <label>Username:</label><br>

        <input class ="form_input_login" type = "text" name="username" required><br><br>

        <label> Password:</label><br>

        <input class ="form_input_login" type = "password" name="password" required><br><br>

        <input class="subbut" type = "submit" name="sub" value = "Log in now!">
        
        <br> <br> 

        Remember me

        <input type="checkbox" name = "remember">
    
    
        </form>
 </main>

</body>
</html>

<?php


if(isset($_POST["sub"]))
{
    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS); 
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password_hash';";

    $result = mysqli_query($connect, $query);
  
    if(mysqli_num_rows($result) !== 1)
    {
       echo "<script> alert('Wrong password or username');</script>";
    }
    else
    {
        $row = mysqli_fetch_assoc($result);

        if($row['username'] === $username && $row['password'] === $password_hash)
           {
               header("Location: home_page.php");
               exit();
    }

    
    /*if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);

     if($row['username'] == $username && $row['password'] == $password_hash)
        {
            header("Location: home_page.php");
            exit();
        } 
        else
        {
            echo "Incorect password or login";
        }
    }
*/

    
}

}
mysqli_close($connect);
session_destroy();

?>