<?php
require_once("db.php");
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

                <input class ="form_input_login" type = "text" name="un" required><br><br>

            <label> Password:</label><br>

                <input class ="form_input_login" type = "password" name="passwd" required><br><br>

                    <input class="subbut" type = "submit" name="sub" value = "Log in now!">
        
                <br> <br> 

            <label class="login">
            First time in our page?
            <a href="register_page.php">Click here to create an account</a>
            </label>
    
        </form>
 </main>

</body>
</html>

<?php

$_SESSION['username'] = filter_input(INPUT_POST,"un",FILTER_SANITIZE_SPECIAL_CHARS);

if(isset($_POST["sub"]))
{
    $username = filter_input(INPUT_POST,"un",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"passwd",FILTER_SANITIZE_SPECIAL_CHARS); 
    
    $query = "SELECT * FROM users WHERE username = '$username';";

    $result = mysqli_query($connect, $query);
    $row_check = mysqli_num_rows($result);

        if($row_check === 1)
        {
            $row = mysqli_fetch_assoc($result);
                if(password_verify($password,$row['password']) == true)
                {
                    header("Location: home_page.php");
                }
            
        else
        {
            echo "<script>alert('Invalid password or username');</script>";
        }
        }
       
    }
  
mysqli_close($connect);
?>