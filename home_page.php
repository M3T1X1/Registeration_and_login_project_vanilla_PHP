<?php
require_once("db.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>

    <h1>Welcome to the home page</h1>

    <h3>Great to see you</h3>

    <h4>
        <?php
            if(isset($_SESSION['username']))
            {
            echo $_SESSION['username'];
            }
        ?>
     </h4>

        <form method="post">

            <input class="subbut" type="submit" name="logout" value= "Log Out!">

        </form>
</main>

</body>
</html>

<?php
if(isset($_POST["logout"]))
{
    session_destroy();
    header("Location: login_page.php");
}
?>