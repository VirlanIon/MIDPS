<?php
	if($_GET['key'] != md5('12345'))
	{
		header('location: login.php');
		exit();
	}
	
	if(!empty($_POST['rate']))
	{
		mysql_connect('localhost', 'root', ''); 
		mysql_select_db('BDtest1');
		
		$new_rate = $_POST['rate'];
		mysql_query("UPDATE rates SET Value='$new_rate' WHERE Name='USD'");
	}
	elseif(!empty($_POST['rate1']))
	{
		mysql_connect('localhost', 'root', ''); 
		mysql_select_db('BDtest1');

		$new_rate = $_POST['rate1'];
		mysql_query("UPDATE rates SET Value='$new_rate' WHERE Name='EUR'");
	}
	elseif(!empty($_POST['rate2']))
	{
		mysql_connect('localhost', 'root', ''); 
		mysql_select_db('BDtest1');

		$new_rate = $_POST['rate2'];
		mysql_query("UPDATE rates SET Value='$new_rate' WHERE Name='RON'");
	}
	if(!empty($_POST['rate3']))
	{
		mysql_connect('localhost', 'root', ''); 
		mysql_select_db('BDtest1');

		$new_rate = $_POST['rate3'];
		mysql_query("UPDATE rates SET Value='$new_rate' WHERE Name='RUB'");
	}
	require_once"fonul.php";	
?>
<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN" 
					   "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Modificarea cursului valutar</title>
		<link rel="stylesheet" href="main.css"/>
	</head>
	<body> 
	<div id="ion">
		<a href="http://site4/login.php">
		<img id="nBack" src="img/nBack.png" alt="Nu-i fotografie"></a>
		<br>
		<h1>Modificarea cursului valutar:</h1>
	<div id="ion1">
		<br/>
		<p id="ion2">? lei -> 1$:</p>
		<form method="post">
			<input id ="label" type="text" name="rate" /><br/>
			<input id ="buton" type="submit" value="SALVEAZA" /><br/>
		</form>
		<br/>
		<p id="ion2">? lei -> 1EUR:</p>
		<form method="post">
			<input id ="label" type="text" name="rate1" /><br/>
			<input id ="buton" type="submit" value="SALVEAZA" /><br/>
		</form>
		<br/>
		<p id="ion2">? lei -> 1RON:</p>
		<form method="post">
			<input id ="label" type="text" name="rate2" /><br/>
			<input id ="buton" type="submit" value="SALVEAZA" /><br/>
		</form>
		<br/>
		<p id="ion2">? lei -> 1RUB:</p>
		<form method="post">
			<input id ="label" type="text" name="rate3" /><br/>
			<input id ="buton" type="submit" value="SALVEAZA" /><br/>
		</form>
			<br>
			<br>
			<a href="http://site4/" 
			title="Apasati un clic">Convertor Valutar</a>
			<br>	
			<br>
			<a href="http://site4/index.php">
			<img src="img/NEXTPAGE1.jpg" alt="Nu-i fotografie"></a>
	</div>
	</div>
	</body>
</html>	
