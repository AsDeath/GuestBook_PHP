<?php
//counter script
require "connectToDB.php"; 

echo "<p align='center'>Текущая дата: ".date("D/M/Y")."</p>";
echo "<p align='center'>Текущее время: ".date("h:i:s")."</p>";

$query = "SELECT `count` FROM `views`";
$result = mysqli_query($connection, $query);

if ($result===FALSE) {
    echo "Ошибка";
    return;
};

$num = mysqli_num_rows($result);
if($num > 0){
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    $i = $row['count'] + 1;
    echo "<p align='center'>Данная WEB-страница была посещена: $i раз</p>";
    $query = "UPDATE `views` SET `count`='$i' WHERE `views`.`id`='1'";
    $result = mysqli_query($connection, $query);
    if(!$result) echo "Error Update";
}

?>