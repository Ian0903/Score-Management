<?php
$mysqli = new mysqli('127.0.0.1', 'root', '123456');
mysqli_select_db($mysqli,'sms');

$result = mysqli_query($mysqli, "SELECT * FROM sms.member") or die("失败");
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>学生成绩管理系统</title>
    <style>
    </style>
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
    <table border="1" width="70%" align="center">
        <tr>
            <th width="5%">编号</th>
            <th width="5%">学生姓名</th>
            <th width="5%">性别</th>
            <th width="5%">专业</th>
            <th width="10%">密码</th>
            <th width="5%">权限级别</th>
            <th width="5%">更新</th>
            <th width="5%">删除</th>
        </tr>
        <?php

        while ($myrow = mysqli_fetch_row($result)) {
            ?>
            <tr>
            <td align="center"><?php echo $myrow[0]; ?></td>
            <td align="center"><?php echo $myrow[1]; ?></td>
            <td align="center"><?php echo $myrow[5]; ?></td>
            <td align="center"><?php echo $myrow[3]; ?></td>
            <td align="center"><?php echo $myrow[2]; ?></td>
            <td align="center"><?php echo $myrow[4]; ?></td>
            <td align="center"><a href="management_update.php?ID=<?=$myrow[0]?>">更新</a></td>
            <td align="center"><a href="delete_user.php?ID=<?=$myrow[0]?>" onclick="return confirm('确认是否要删除？')" >删除</a></td>
            </tr><?php
        } ?>
    </table>
</div>

<div>
	<p align="center">
	<a href="add_student.php">添加学生</a>
	</>
</div>

<nav>
	<p align="right">
		<a>Design by 杨宇俊</a>
	</p>
</nav>
</div>
</body>
</html>