<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$studentname = $_POST['studentname'];
$sex = $_POST['sex'];
$major = $_POST['major'];

$sid = $_GET['ID'];

if($query = @mysqli_query($mysqli, "UPDATE sms.member SET NAME='$studentname',MAJOR='$major',SEX='$sex' WHERE ID='$sid'")){
    echo "<script> alert('修改成功');</script>";
    include('stuinfo.php');
}else{
    echo "<script> alert('修改失败，请重试');</script>";
    include('stuinfo.php');
}