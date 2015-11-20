##简单PHP Auth模块
###文件列表：
|
|
|Readme.md 帮助文档
|config.php 配置文件
|ssh.php 登陆验证文件
|header.php 包含页面
|logout.php 登出文件
|assert 样式文件




###使用方法：
将config配置完成后，将需要授权访问的文件头部加入：
	
	<?php
	include './header.php';
	?>
	
即可

###config.php各项参数:
$password = 'lyh123456';//密码

$target = './index.php';//完成验证后跳转的页面

$authPage = 'ssh.php';//授权页面
