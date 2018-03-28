<?php session_start();
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$user = $_SESSION['username'];

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


<table border="1" align="center" width="50%">
    <tr>
        <th width="5%">#</th>
        <th width="25%">科目</th>
        <th width="10%">成绩</th>
    </tr>
    <?php
    $result = mysqli_query($mysqli, "SELECT * FROM sms.score  WHERE NAME='$user'");
    while ($myrow = mysqli_fetch_row($result)) {
        ?>
        <tr>
        <td align="center"><?php echo $myrow[0]; ?></td>
        <td align="center"><?php echo $myrow[2]; ?></td>
        <td align="center"><?php echo $myrow[3]; ?></td>
        </tr><?php
    } ?>
</table>

<nav>
	<p align="right">
		<a>Design by 杨宇俊</a>
	</p>
</nav>
</body>
</html>
