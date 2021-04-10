<?php

if(@$fp=fopen('GuestBook.txt','r')){
    while($line = fgets($fp)){
        $params = explode(';',$line);
        echo '
        <div id="mess">
        <div>
        <p>Время:'.$params[0].'</p>
        <p>Дата: '.$params[1].'</p>
        <p>ФИО: '.$params[2].'</p>
        <p>Email: '.$params[3].'</p>
        </div>
        <div>
            <h3>Сообщение</h3>
            <p>'.$params[4].'</p>
        </div>
        </div>
        ';
    }
    fclose($fp);
}else{
    @$fp=fopen('GuestBook.txt','w');
    fclose($fp);
    echo "Сообщений нет<br>";
}

if(@$fp=fopen('GuestBook.txt','a')){
    if(empty($_POST['fio']) || empty($_POST['email']) || empty($_POST['message'])) {
        return;
    }
    if(isset($_POST["done"])){
        @header('Location: Index.php');
        $fio = $_POST['fio'].';';
        $email = $_POST['email'].';';
        $message = $_POST['message'].';';
        $ftime = date("h:i:s").';';
        $fdate = date("D/M/Y").';';
        $write = $ftime.$fdate.$fio.$email.$message;
        fwrite($fp,$write."\r\n");
        fclose($fp);
    }
}else{
    echo "Error<br>";
}
?>

<script type="text/javascript">
  document.location.replace("Index.php");/*делаем редирект на главную страницу сайта*/
</script>