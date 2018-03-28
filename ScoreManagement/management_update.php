<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$sid = $_GET['ID'];

$sql = "SELECT * FROM sms.member WHERE ID ='$sid'";
$result = mysqli_query($mysqli, $sql);
$myrow = mysqli_fetch_row($result);
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
    <meta charset="UTF-8"/>
</head>

<body>
<form class="box login" method="post" action="management_update_submit.php?ID=<?= $myrow[0]; ?>" >

<table border="1">
	<tr>
        <td>学生姓名</td>
        <td><input type="text" tabindex="1" required name="m_studentname" value="<?= $myrow[1] ?>"></td>
	</tr>
	<tr>
        <td>性别</td>
        <td><input type="text" tabindex="2" required name="m_sex" value="<?= $myrow[5] ?>"></td>
	</tr>
	<tr>
        <td>专业</td>
        <td><input type="text" tabindex="3" required name="m_major" value="<?= $myrow[3] ?>"></td>
	</tr>
	<tr>
        <td>密码</td>
        <td><input type="text" tabindex="4" required name="m_pwd" value="<?= $myrow[2] ?>"></td>
	</tr>
</table>
<input type="submit" class="btnLogin" value="提交" tabindex="4" name="login">
</form>
</body>
</html>

