<?php session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
</head>

<body>
<h1 class="pagetitle" align="center">学生成绩管理系统-教师端</h1>

<nav>
    <hr>
    <p align="center">
        <a href="teacher.php">主页</a>
        <a href="modmark.php">成绩修改</a>
        <a href="management.php">学生管理</a>
        <a href="teachermodpwd.php">修改密码</a>
    </p>
    <hr>
</nav>

<div>
    <form class="box login" method="post" action="check_pwd.php" align="center">
            更改密码
            <input type="password" tabindex="1" placeholder="旧密码" required name="oldpassword">
            <input type="password" tabindex="2" placeholder="新密码" required name="newpassword">
            <input type="submit" class="btnLogin" value="修改密码" tabindex="4" name="login">

    </form>
</div>

<nav>
	<p align="right">
		<a>Design by 杨宇俊</a>
	</p>
</nav>
</body>
</html>
