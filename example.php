<?php 
require_once '/inc/db-settings.php';
include('/inc/config.php'); 
include('/inc/info.php'); 

/* 修改当前页面的名称 */
$game_name = "演示页面";
?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $game_name; ?> - <?php echo $mc_name; ?> - <?php echo $mc_desc; ?></title>
		<link rel='stylesheet' href='css/bootstrap.css'> 
		<link rel="shortcut icon" href="img/favicon.ico">
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
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
						<li><a href="index.php">主页</a></li>
					</ul>
					<ul class="nav navbar-nav">
						<li class="active"><a href="example.php"><?php echo $game_name; ?></a></li>
					</ul>
					<!-- [可以随意增加导航栏] -->
					
					<div class="nav navbar-nav navbar-right">
						<a href="https://github.com/Mayomi/" class="navbar-text" target="_blank">Powered by Mayomi</a>
					</div>
				</div>
			</div>
		</div>

	
		<div class="container" style="margin-top: 80px">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $game_name; ?> 前 <?php echo $set["table_limit"]; ?> 名玩家</h3>
				</div>
				
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
						<!-- [可以随意增加导航栏] -->
							<th>排名</th>
							<th>玩家名称</th>
							<th>当前积分</th>
							<th>最高积分</th>
						<!-- [格式与以下相同即可] 
							<th>自定义栏</th>
						-->
						</tr>
					</thead>
				
					<tbody>
						<?php
							$index = 1;
							/* Rank_Table 为需要获取的表单名称 */
							/* Kills 为根据Kills的值来排序 */
							$query = $db->query("SELECT * FROM Rank_Table ORDER BY Kills DESC LIMIT 0,".$player_number, PDO::FETCH_ASSOC);
							if ( $query->rowCount() ){
								foreach( $query as $row ){
									/* $row["xxx"] xxx为表的名称 根据数据库内容自行修改*/
									
									/* Name 为玩家的名称 请根据表单来修改 区分大小写 */
									$head = ($player_avatar == "1") ? '<img src='.$avatar_api.$row["Name"].'/20>' : null ;
									echo "<tr>";
									echo "<td>".ranking($index++)."</td>";
									/* Name 为玩家的名称 请根据表单来修改 区分大小写 */
									echo "<td>".$head." ".verify($row["Name"])."</td>";
									echo "<td>".$row["Elo"]."</td>";
									echo "<td>".$row["maxElo"]."</td>";
									/* 格式与以下相同即可 
									echo "<td>".$row["xxx"]."</td>";
									*/
									echo "</tr>";
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		
	<?php require("inc/footer.php");?>

	</body>
</html>
