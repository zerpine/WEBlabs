<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $text = $_POST['text'];
    $word_count = str_word_count($text, 0, 'а-яёА-ЯЁ');
    $char_count = strlen($text);
}
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>task2</title>
    </head>
    <body>
    <p>Task2a</p>
    <form method="POST">
        <textarea name="text" rows="2" cols="50"></textarea><br />
        <button type="submit">Ответ</button>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <p>Количество слов: <?php echo $word_count; ?></p>
        <p>Количество символов: <?php echo $char_count; ?></p>
    <?php endif; ?>
    </body>
    </html>
<?php