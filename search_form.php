<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Поиск в книге сообщений</title>
</head>
<body>

<h1>Форма поиска сообщения в БД</h1> <br>
<a href="IndexDB.php">Go Home</a><br>
<form action="search.php" method="get">
Найти в БД:<br>
<textarea rows="5" name="message1">найти в БД
</textarea><br>
<input type="submit" value="Search">
</form>
<br>
<?php require_once "search.php" ?>

</body>
</html>