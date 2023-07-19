<?php
include("db.php")
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
    
    
        </form>
 </main>

</body>
</html>

<?php
mysqli_close($connect);
?>