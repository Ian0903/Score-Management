<?php session_start();

$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
//获取session的值
$username_pwd = $_SESSION['username'];
$query = mysqli_query($mysqli, "SELECT PASSWORD FROM sms.member WHERE NAME='$username_pwd'") or die("查询失败");
$row = mysqli_fetch_row($query);

$nowpassword = $row[0];


if ($oldpassword == $nowpassword) {
    $sql = "update member set PASSWORD='$newpassword' where NAME='$username_pwd'";
    mysqli_query($mysqli, $sql) or die("失败");
    echo "<script> alert('密码修改成功,请重新登录');</script>";
    include('index.php');
} else {
    echo "<script> alert('旧密码不正确，请重新登录');</script>";
    include('index.php');
}