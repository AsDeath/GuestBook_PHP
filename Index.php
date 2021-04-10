
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<title>Caragacian</title>
<style>
    #mess {
        display: flex;
        flex-direction: row;
    }
    #mess div{
        margin: 5px;
        padding: 10px;
        border-width: 3px;  
        border-style: solid;
        border-color: silver;  
    }
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

<header>
<h1 align="center">Гостевая книга</h1>
</header>

<main>

<? include_once "count.php"; ?>

<h3 align="center">Оставить сообщение: </h3>
<div class="text-input">
<form class="form" action="" method="POST">

<label for="fio">ФИО:</label>
<input type="text" id="fio" name="fio">
<label for="email">Email:</label>
<input type="text" id="email" name="email"></input>
<label for="message">Сообщение:</label>
<input type="text" id="message" name="message"></input>
<input type="submit" name="done"></input><br><br>
</form>
</div>

<?php include_once "GuestBook.php"; ?>

</body>
</html>
