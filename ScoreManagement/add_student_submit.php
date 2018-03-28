<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$a_name = $_POST['a_name'];
$a_sex = $_POST['a_sex'];
$a_major = $_POST['a_major'];
$a_pwd = $_POST['a_pwd'];


if($query = @mysqli_query($mysqli,  "INSERT INTO sms.member (NAME,SEX,MAJOR,PASSWORD,USERFLAG) VALUE('$a_name','$a_sex','$a_major','$a_pwd','0')")){
    echo "<script> alert('添加学生成功');</script>";
    include('management.php');
}else{
    echo "<script> alert('添加失败，请重试');</script>";
    include('management.php');
}