<?php
require "connectToDB.php"; 

$query = 'SELECT * FROM `messages`';

$result = mysqli_query($connection, $query);

if($result){
    $num = mysqli_num_rows($result);
    if($num > 0){
        echo '<br>';
        echo '<table><tr><th>id</th><th>time</th><th>date</th><th>name</th><th>email</th><th>message</th></tr>';
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo '<tr><td>'.
            $row['id'].
            '</td><td>'.
            $row['time'].
            '</td><td>'.
            $row['date'].
            '</td><td>'.
            $row['name'].
            '</td><td>'.
            $row['email'].
            '</td><td>'.
            $row['message'].
            '</td><td>'.
            '<a href="FormUpdate.php?id='.$row['id'].'">Update</a>'.
            '</td><td>'.
            '<a href="Delete.php?id='.$row['id'].'">Delete</a>'.
            '</td></tr>';
        };
        echo '</table>';
    } else echo "Number Rows <= 0";
}

?>