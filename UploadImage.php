<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php";

$NumberCar = $_POST['NumberCar'];
$date = $_POST['date'];
$brand = $_POST['brand'];
$color = $_POST['color'];
$state = $_POST['state'];
$name = $_POST['name'];
$address = $_POST['address'];
$NumberPhone = $_POST['NumberPhone'];
$path = 'images/' . time() . $_FILES['image']['name'];

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

$path = 'uploads/' . time() . $_FILES['image']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
$_SESSION['message'] = 'Ошибка при загрузке сообщения';
header('Location: ../register.php');
}

$password = md5($password);

mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

$_SESSION['message'] = 'Регистрация прошла успешно!';
header('Location: ../index.php');


} else {
$_SESSION['message'] = 'Пароли не совпадают';
header('Location: ../register.php');
}

?>