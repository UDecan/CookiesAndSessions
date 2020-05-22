<?php
namespace App;
require_once "vendor/autoload.php";

if (isset($_POST['name']) && (!empty($_POST['name'])))
{
    $name = $_POST['name'];
    setcookie('name', $name);
    //setcookie('name', $name, time() + 3600);
}
elseif (isset($_COOKIE['name']))
{
    $name = $_COOKIE['name'];
}
else
{
    $name = 'гость';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Страница index.php</title>
        <meta charaset="UTF-8">
    </head>
    <body>
        <h1>Страница index.php</h1>
        <a href="page.php">Страница page.php</a>
        <br><br>
        <a href="Session/task1.php">Страница task1.php</a>
        <br><br>
        <p>Привет, <?php echo $name; ?></p>
        <form method="post">
            <label>
                <input type="text" name="name" />
            </label>
            <input type="submit" />
        </form>
    </body>
</html>