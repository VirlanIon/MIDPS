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
						$result = mysql_query("SELECT * FROM data") or die(mysql_error());
						$data = mysql_fetch_array($result);
						do {
							printf('
								<div class="article">
									<img src="img/image.jpg" />
									<a class="title" href="#"><h2>%s</h2></a>
									<p>%s <a href="view.php?id=%s"> Detalii</a></p>
									<div style="clear:both;"></div>
								</div>
							',$data["title"],$data["m_desc"],$data["id"]);
						}
						while($data = mysql_fetch_array($result));
					?>
				</div>
				
				<div class="right">
					<div class="right_menu">
						<a href="#">Home</a>
						<a href="http://site8/add.php">Add articles</a>
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




















