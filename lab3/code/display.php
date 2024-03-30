<?php
session_start();
if(false === isset($_POST['surname'], $_POST['name'], $_POST['age'])) {
    header('Location: /Task2b.php');
    exit();
}
$_SESSION['name'] = $_POST['name'];
$_SESSION['surname'] = $_POST['surname'];
$_SESSION['age'] = $_POST['age'];

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$age = $_SESSION['age'];

echo 'Имя: ' . $name . '<br /> Фамилия: ' . $surname . '<br /> Возраст: ' . $age . '<br />';
?>
<!DOCTYPE html>