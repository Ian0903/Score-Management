<?php session_start();
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');
$user = $_SESSION['username'];

$result = mysqli_query($mysqli, "SELECT * FROM sms.member WHERE NAME='$user'") or die("失败");
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
</head>

<body>
<h1 class="pagetitle" align="center">学生成绩管理系统-学生端</h1>


<nav>
    <hr>
    <p align="center">
        <a href="student.php">主页</a>
        <a href="query.php">成绩查询</a> 
        <a href="stuinfo.php">个人信息</a> 
        <a href="modpwd.php">修改密码</a> 
    <hr>
</nav>



<div>
    <table border="1" width="65%" align="center">
        <tr>
            <th width="5%">编号</th>
            <th width="5%">姓名</th>
            <th width="5%">性别</th>
            <th width="5%">专业</th>
            <th width="5%">更新</th>
        </tr>
        <?php

        while ($myrow = mysqli_fetch_row($result)) {
            ?>
            <tr>
            <td align="center"><?php echo $myrow[0]; ?></td>
            <td align="center"><?php echo $myrow[1]; ?></td>
            <td align="center"><?php echo $myrow[5]; ?></td>
            <td align="center"><?php echo $myrow[3]; ?></td>
            <td align="center"><a href="stu_update_info.php?ID=<?=$myrow[0]?>">更新</a></td>
            </tr><?php
        } ?>
    </table>
</div>

<nav>
	<p align="right">
		<a>Design by 杨宇俊</a>
	</p>
</nav>

</body>
</html>
