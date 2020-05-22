<?php
session_start();

$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];

if (($answer1 == 4) && ($answer2 == 6) && ($answer3 == 8)){
    echo "Ваш результать 3/3";
}
elseif (($answer1 == 4) && ($answer2 == 6) || ($answer2 == 6) && ($answer3 == 8) || ($answer1 == 4) && ($answer3 == 8)) {
    echo "Ваш результать 2/3";
}
elseif (($answer1 == 4) || ($answer2 == 6) || ($answer3 == 8)){
    echo "Ваш результать 1/3";
}
else{
    echo "Ваш результать 0/3";
}
?>

<br></<br>
<a href="/index.php">На страницу index.php</a>
