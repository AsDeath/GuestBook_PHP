<?php
    require "connectToDB.php";

    if(empty($_GET['id'])) return;
    $id = $_GET['id'];

    $query = "SELECT * FROM `messages` WHERE `messages`.`id`=$id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $name = $row['name'];
    $email = $row['email'];
    $message = $row['message'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .form{
        display: flex;
        flex-direction: column;
    }
    .text-input{
        position: relative;
        margin-top: 50px;
    }
input[type="text"]{
display: inline-block;
width: 370px;
height: 40px;
box-sizing: border-box;
outline: none;
border: 1px solid lightgray;
border-radius: 3px;
padding: 10px 10px 10px 10px;
transition: all 0.1s ease-out;
}
input[type="submit"]{
display: inline-block;
width: 80px;
height: 30px;
box-sizing: border-box;
outline: none;
border: 1px solid lightgray;
border-radius: 3px;
margin-top: 15px;
transition: all 0.1s ease-out;
}
</style>
</head>
<body>
    <h1>Форма обновления сообщения в БД с id = <?=$id?></h1>
    <div class="text-input">
    <form class="form" action="Update.php" method="GET">
    <input type="text" name="id" value="<?=$id?>"><br>

    <label for="name">ФИО:</label>
    <input type="text" id="name" name="name" placeholder="<?=$name?>">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="<?=$email?>"></input>
    <label for="message">Сообщение:</label>
    <input type="text" id="message" name="message" placeholder="<?=$message?>"></input>
    <input type="submit" name="Update"></input><br><br>
    </form>
    </div>
</body>
</html>