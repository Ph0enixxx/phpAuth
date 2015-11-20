<?php
error_reporting(0);
include './config.php';
if($_POST['cookie'])
	setcookie($_POST['cookie'],1);
if($_POST['cookie'] == $password)
	header('location: '.$target);
else if(isset($_POST['cookie']))
	echo "<h5 style='color:red;'>Password incorrect</h5>"
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="./assert/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="text-align:center;padding-top:200px;">
   <div style="margin-left: auto;margin-right: auto;width:70%;">
  	<form action="./<?php echo $authPage;?> "method="post">
	  <div class="col-lg-6" >
	  	<h2>Please input password:</h2>
		<div class="input-group" >
	    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="cookie" >
	  		 <span class="input-group-btn">
	  			<button type="submit" class="btn btn-success">Submit</button>
     		 </span>
	  	</div>
	  </div>
	</form>
   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=".assert/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=".assert/js/bootstrap.min.js"></script>
  </body>
</html>

