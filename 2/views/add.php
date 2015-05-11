<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link type="text/css" rel="stylesheet" href="./views/css/style.css">
</head>
<body>
<div id="container">
    <h1>GALLERY</h1>
    <form action="./add.php" method="post">
        <p><input type="text" placeholder="Заголовок" name="title" required></p>
        <p><textarea name="text" placeholder="Текст новости..." rows="10" wrap="soft" required></textarea></p>
        <p><input type="submit" value="Добавить новость"></p>
    </form>
</div>
</body>
</html>