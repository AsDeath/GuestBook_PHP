<?php
//counter script
if(@$fp=fopen('count.txt','r')){
    $i = fgets($fp);
    fclose($fp);
}else{
    $i = 0;
}
$i++;
$fp = fopen('count.txt','w');
fwrite($fp,$i);
fclose($fp);

echo "<p align='center'>Текущая дата: ".date("D/M/Y")."</p>";
echo "<p align='center'>Текущее время: ".date("h:i:s")."</p>";
echo "<p align='center'>Данная WEB-страница была посещена: $i раз</p>";


?>