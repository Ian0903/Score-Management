<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');
$delID = $_GET['ID'];
if (mysqli_query($mysqli, "delete from score WHERE ID ='$delID'")) {
    echo "<script> alert('删除成功');</script>";
    include('modmark.php');
}else{
    echo "<script> alert('删除失败');</script>";
    include('modmark.php');
}