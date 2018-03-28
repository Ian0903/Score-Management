<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$studentname = $_POST['studentname'];
$subject = $_POST['subject'];
$mark = $_POST['mark'];

$sid = $_GET['ID'];

if($query = @mysqli_query($mysqli, "UPDATE sms.score SET NAME='$studentname',COURSE='$subject',MARK='$mark' WHERE ID='$sid'")){
    echo "<script> alert('修改成功');</script>";
    include('modmark.php');
}else{
    echo "<script> alert('修改失败，请重试');</script>";
    include('modmark.php');
}
