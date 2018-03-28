<?php session_start();
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');
$username = $_POST['username'];
$password = $_POST['password'];
//获取session的值
$query = @mysqli_query($mysqli, "SELECT NAME,USERFLAG FROM sms.member WHERE NAME='$username'AND PASSWORD ='$password'")
or die("SQL语句执行失败");
//判断用户以及密码
if ($row = mysqli_fetch_array($query)) {
    //判断权限
    if ($row['USERFLAG'] == 1 or $row['USERFLAG'] == 0) {
        $_SESSION['username'] = $row['NAME'];
        $_SESSION['userflag'] = $row['USERFLAG'];
        if (isset($_SESSION['username'])) {
            if ($_SESSION['userflag'] == 1)
                header("refresh:0;url=teacher.php");
            if ($_SESSION['userflag'] == 0)
                header("refresh:0;url=student.php");
        }
    } else {
        echo "<script> alert('无权登陆');</script>";
        include('index.php');
    }

} else {
    echo "<script> alert('账号或密码错误');</script>";
    include('index.php');
}
?>