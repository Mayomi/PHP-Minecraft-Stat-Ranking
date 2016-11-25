<?php 
include('/inc/config.php'); 
?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $mc_name; ?> - <?php echo $mc_desc; ?></title>
		<link rel='stylesheet' href='css/bootstrap.css'> 
		<link rel="shortcut icon" href="img/favicon.ico">
	</head>
	
	<header class="navbar navbar-default navbar-static-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $mc_website; ?>"><?php echo $mc_name; ?></a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!-- [可以随意增加导航栏] -->
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">主页</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="example.php">演示页面</a></li>
				</ul>
				<!-- [可以随意增加导航栏] -->
			
				<div class="nav navbar-nav navbar-right">
					<a href="https://github.com/Mayomi/" class="navbar-text" target="_blank">Powered by Mayomi</a>
				</div>
			</div>
		</div>
	</header>
	
	<body>
		<div class="container">
			<div class="jumbotron">
				<div style="text-align: center;">
					<h2><?php echo $mc_main_1; ?> <?php echo $mc_name; ?> <?php echo $mc_main_2; ?></h2>
				</div>

				<div style="text-align: center;"><p><?php echo $mc_main_desc; ?></p></div>
			</div>
		</div>
	<?php require("inc/footer.php");?>
	</body>
	
</html>
