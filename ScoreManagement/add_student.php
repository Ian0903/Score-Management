<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
    <meta charset="UTF-8"/>
</head>

<body>
<form class="box login" method="post" action="add_student_submit.php">
<table border="1">
	<tr>
        <td>学生姓名</td>
        <td><input type="text" tabindex="1" required name="a_name"></td>
	</tr>
	<tr>
        <td>性别</td>
        <td><input type="text" tabindex="2" required name="a_sex"></td>
	</tr>
	<tr>
        <td>专业</td>
        <td><input type="text" tabindex="3" required name="a_major"></td>
	</tr>
	<tr>
        <td>密码</td>
        <td><input type="text" tabindex="4" required name="a_pwd"></td>
	</tr>
</table>
        <input type="submit" class="btnLogin" value="提交" tabindex="5" name="login">
</form>
</body>
</html>