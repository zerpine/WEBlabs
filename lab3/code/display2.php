<?php
session_start();
if (false === isset($_POST['name'], $_POST['age'], $_POST['salary'], $_POST['country'])) {
    header('Location: task2c.php');
    exit();
}
$user = [
    'name' => $_POST['name'],
    'age' => $_POST['age'],
    'salary' => $_POST['salary'],
    'country' => $_POST['country']
];

$_SESSION['user'] = $user;

echo '<ul>';
foreach ($user as $key => $value) {
    echo '<li>' . $key . ' - ' . $value . '</li>';
}
echo '</ul>';
?>
<!DOCTYPE html>
