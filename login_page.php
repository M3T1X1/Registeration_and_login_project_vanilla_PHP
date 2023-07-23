<?php
include("db.php");
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

    
    
        </form>
 </main>

</body>
</html>

<?php
if(isset($_POST["sub"]))
{
    $username = filter_input(INPUT_POST,"un",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"passwd",FILTER_SANITIZE_SPECIAL_CHARS); 
    
    $query = "SELECT * FROM users WHERE username = '$username';";

    $result = mysqli_query($connect, $query);
    $row_check = mysqli_num_rows($result);

   // echo $row_check;

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