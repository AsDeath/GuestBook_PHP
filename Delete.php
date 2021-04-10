<?php
require "connectToDB.php"; 

if(empty($_GET['id'])) return;
$id = $_GET['id'];

$query = "DELETE FROM `messages` WHERE `messages`.`id`=$id";

$result = mysqli_query($connection, $query);

if(!$result) echo "Error";
//@header('Location: IndexDB.php');
?>
<script type="text/javascript">
  document.location.replace("IndexDB.php");/*делаем редирект на главную страницу сайта*/
</script>