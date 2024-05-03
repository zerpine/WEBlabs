<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doc</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <label for="category">Category</label>
        <select name="category" required>
            <option value="Laptops">Laptops</option>
            <option value="Phones">Phones</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows="1" name="description"></textarea>

        <input type="submit" value="save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>
</html>