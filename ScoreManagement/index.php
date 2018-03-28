<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8"/>
</head>

<body>
<h1 class="pagetitle" align="center">学生成绩管理系统-登陆</h1>

<form class="box login" method="post" action="check_session_login.php" >
<table border="1" align="center">
	<tr>
        <td>Username</td>
        <td><input type="text" tabindex="1" placeholder="Username or Email" required name="username"></td>
	</tr>
	<tr>
        <td>Password</td>
        <td><input type="password" tabindex="2" required name="password"></td>
	</tr>
	<tr>
        <td><input type="checkbox" tabindex="3">记住账户密码</td>
        <td><input type="submit" class="btnLogin" value="登录" tabindex="4" name="login"></td>
	</tr>

<table>
</form>

<nav>
	<p align="right">
		<a>Design by 杨宇俊</a>
	</p>
</nav>


</body>
</html>
