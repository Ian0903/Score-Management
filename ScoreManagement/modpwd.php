<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
</head>

<body >

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
