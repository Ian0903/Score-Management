<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$studentname = $_POST['studentname'];
$subject = $_POST['subject'];
$mark = $_POST['mark'];

if($query = @mysqli_query($mysqli, "INSERT INTO sms.score (NAME,COURSE,MARK) VALUE('$studentname','$subject','$mark')")){
    echo "<script> alert('添加成绩成功');</script>";
    include('modmark.php');
}else{
    echo "<script> alert('添加失败，请重试');</script>";
    include('modmark.php');
}