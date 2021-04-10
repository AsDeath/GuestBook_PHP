<?php
//mysqli_connect() - установка соединения

$host="localhost";
$user="root";
$password="root";
$dbname="guestbook";

$connection=mysqli_connect($host, $user, $password, $dbname) or mysqli_connect_error();

if($connection) {
//echo "Соединение с БД установлено";
} else {
echo "Не возможно установить соединение с БД";
}
echo "<br>";

mysqli_set_charset($connection, 'utf-8');

$query='CREATE TABLE IF NOT EXISTS `messages`(`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `time` TEXT NOT NULL, `date` TEXT NOT NULL, `name` TEXT NOT NULL,`email` TEXT NOT NULL, `message` TEXT NOT NULL, PRIMARY KEY(id))';
$result=mysqli_query($connection, $query);

if ($result===FALSE) {
    echo "Ошибка";
    return;
};

$query='CREATE TABLE IF NOT EXISTS `views` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `count` INT UNSIGNED)';
$result=mysqli_query($connection,$query);

if ($result===FALSE) {
    echo "Ошибка";
    return;
};

//mysqli_close($connection);
?>