<?php
// Подключение к серверу MySQL
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['text']);

    $query = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->query($query);
}


$ads = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $ads[] = $row;
    }
    $result->close();
}

$mysqli->close();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab4</title>
</head>
<body>

<form action="index.php" method="POST">
    <p>--Доска объявлений--</p>
    <label for="email">Почта</label>
    <input type="email" name="email" required><br><br>

    <label for="title">Название</label>
    <input type="text" name="title" required><br><br>

    <label for="categories">Категория</label>
    <select name="categories" required>
        <option value="laptops">Ноутбуки</option>
        <option value="phones">Телефоны</option>
        <option value="keyboards">Клавиатуры</option>
    </select><br><br>

    <label for="description">Описание:</label><br>
    <textarea name="text" rows="5" cols="100" required></textarea><br>

    <button type="submit">Отправить</button>
</form>

<div id="table">
    <?php if (!empty($ads)): ?>
        <table>
            <thead>
            <tr>
                <th>Почта</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Описание</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ads as $ad): ?>
                <tr>
                    <td><?= $ad['email'] ?></td>
                    <td><?= $ad['title'] ?></td>
                    <td><?= $ad['category'] ?></td>
                    <td><?= $ad['description'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Объявлений нет.</p>
    <?php endif; ?>
</div>
</body>
</html>