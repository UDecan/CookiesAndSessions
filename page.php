<?php
namespace App;
require_once "vendor/autoload.php";
/*if (isset($_COOKIE['name']))
{
    $name = $_COOKIE['name'];
}
else
{
    $name = 'гость';
}*/
if (isset($_COOKIE['name']))
{
    setcookie('name', '');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Страница page.php</title>
        <meta charaset="UTF-8">
    </head>
    <body>
        <h1>Страница page.php</h1>
        <p>Привет, куки удалены!</p>
        <a href="index.php">Страница index.php</a>
    </body>
</html>