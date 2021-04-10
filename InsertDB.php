<?php
 require "connectToDB.php"; 
 
if(empty($_POST['fio']) || empty($_POST['email']) || empty($_POST['message'])) {
    return;
}
if(isset($_POST["done"])){
    $fio = htmlspecialchars(trim($_POST['fio']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $ftime = date("h:i:s");
    $fdate = date("D/M/Y");
    $query = "INSERT INTO `messages`(`id`,`time`,`date`,`name`,`email`,`message`) VALUES (NULL, '$ftime','$fdate','$fio','$email','$message')";
    $result = mysqli_query($connection, $query);

    if(!$result) echo "Error";
}
//@header("Location: IndexDB.php");
?>

<script type="text/javascript">
  document.location.replace("IndexDB.php");/*делаем редирект на главную страницу сайта*/
</script>