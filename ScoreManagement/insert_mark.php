<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
    <meta charset="UTF-8"/>
</head>

<body>
<form class="box login" method="post" action="insert_mark_submit.php">
    <table border="1">
	<tr>
        <td>学生姓名</td>
        <td>
			<input type="text" tabindex="1" required name="studentname">
		</td>
	</tr>
	<tr>
        <td>科目</td>
        <td>
			<input type="text" tabindex="2" required name="subject" >
		</td>
	</tr>
	<tr>
        <td>成绩</td>
        <td>
			<input type="text" tabindex="3" required name="mark">
		</td>
	</tr>
	</table>
        <input type="submit" class="btnLogin" value="提交" tabindex="4" name="login">
</form>
</body>
</html>

