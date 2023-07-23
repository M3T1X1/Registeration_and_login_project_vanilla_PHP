<?php
include("db.php");
/*
foreach($_SERVER as $key => $value)
{
    echo $key. "=>" .$value . "<br>";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
    <h1>Register</h1>
    <h3>Welcome to the simple registeration form</h3>

        <form action="<?php  htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post"> 
        
        <label>Email:</label><br>
        <input class ="form_input_register" type = "text" name="email" required><br><br>
        
        <label>Username:</label><br>
        <input class ="form_input_register" type = "text" name="username" required><br><br>

        <label> Password:</label><br>
        <input class ="form_input_register" type = "password" name="password" required><br><br>

        <input class="subbut" type = "submit" name="sub" value = "Register now!">
    
    
        </form>
        
        <br>

        <label class="login">
        Already have an account?
        <a href="login_page.php">Click here to Log in</a>
        </label>


        <?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["sub"]))
    {
        
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);     
        
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query =  mysqli_query($connect, "INSERT INTO users (email, username, password) VALUES
                                        ('$email',
                                            '$username',
                                                '$password_hash')");
                                                    header('Location: login_page.php');   

                      if($query)
                      {
                        echo "<script> alert('You are registered'); </script>";
                      }                 
                                               
    }
}
        ?>
    
    </main>
</body>
</html>