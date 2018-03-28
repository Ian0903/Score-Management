<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$m_studentname = $_POST['m_studentname'];
$m_sex = $_POST['m_sex'];
$m_major = $_POST['m_major'];
$m_pwd = $_POST['m_pwd'];

$sid = $_GET['ID'];

if($query = @mysqli_query($mysqli, "UPDATE sms.member SET NAME='$m_studentname',SEX='$m_sex',MAJOR='$m_major',PASSWORD='$m_pwd' WHERE ID='$sid'")){
    echo "<script> alert('修改成功');</script>";
    include('management.php');
}else{
    echo "<script> alert('修改失败，请重试');</script>";
    include('management.php');
}
