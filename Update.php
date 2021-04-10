<?php

require "connectToDB.php";

if(empty($_GET['id']) || empty($_GET['name']) || empty($_GET['email']) || empty($_GET['message'])) return;
$id = htmlspecialchars(trim($_GET['id']));
$name = htmlspecialchars(trim($_GET['name']));
$email = htmlspecialchars(trim($_GET['email']));
$message = htmlspecialchars(trim($_GET['message']));
$ftime = date("h:i:s");
$fdate = date("D/M/Y");

$query = "UPDATE `messages` SET `time`='$ftime', `date`='$fdate', `name`='$name', `email`='$email', `message`='$message' WHERE `messages`.`id`=$id";
$result = mysqli_query($connection, $query);
if(!$result) echo "Error";

//@header('Location: IndexDB.php');
?>
<script type="text/javascript">
  document.location.replace("IndexDB.php");/*делаем редирект на главную страницу сайта*/
</script>