<?php
$conn=new mysqli('db', 'test', 'test', 'test', 3306);
if(!$conn){
    die(mysqli_error($conn));
}
?>