<?php
	$connect = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("bdblog");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Blog</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body> 
		<div class="wrapper">
			<div class="header">
				<a href="index.php"><img id="logo" src="img/logo.jpg" /></a>
			</div>
			
			<div class="content">
			
				<div class="left">
					<?php 
						if(!isset($_GET["id"])){
							$id = 1;
						}else
						{
							$id = $_GET["id"];
						}
						$result = mysql_query("SELECT * FROM data WHERE id='$id'") or die(mysql_error());
						$data = mysql_fetch_array($result);
						do {
							printf('
								<div>
									<h1>%s</h1>
									<p>%s</p>
								</div>
							',$data["title"],$data["desc"]);
						}
						while($data = mysql_fetch_array($result));
					?>
				</div>
				
				<div class="right">
					<div class="right_menu">
						<a href="#">Home</a>
						<a href="#">Articole</a>
						<a href="#">Video</a>
						<a href="#">Foto</a>
						<a href="#">Arhiv</a>
					</div>				
				</div>
				
				<div style="clear:both;"></div>
			</div>
			
			<div class="footer">
				My Blog (c) 2016 for MIDPS
			</div>
		</div>
	</body>
</html>	




















