<?php
	require_once"fonul.php";
	
	mysql_connect('localhost', 'root', ''); 
	mysql_select_db('BDtest1');
	
	$result = mysql_query("SELECT * FROM rates WHERE Name='USD'");
	$row = mysql_fetch_assoc($result);
	$rate = $row['Value'];

	$result = mysql_query("SELECT * FROM rates WHERE Name='EUR'");
	$row = mysql_fetch_assoc($result);
	$rate1 = $row['Value'];
	
	$result = mysql_query("SELECT * FROM rates WHERE Name='RON'");
	$row = mysql_fetch_assoc($result);
	$rate2 = $row['Value'];

	$result = mysql_query("SELECT * FROM rates WHERE Name='RUB'");
	$row = mysql_fetch_assoc($result);
	$rate3 = $row['Value'];

	if(isset($_POST['bucks']))
		$bucks = $_POST['bucks'];
	else 
		$bucks = 0;
	if(isset($_POST['bucks1']))
		$bucks1 = $_POST['bucks1'];
	else 
		$bucks1 = 0;
	if(isset($_POST['bucks2']))
		$bucks2 = $_POST['bucks2'];
	else 
		$bucks2 = 0;
	if(isset($_POST['bucks3']))
		$bucks3 = $_POST['bucks3'];
	else 
		$bucks3 = 0;
?>

<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN" 
					   "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Convertor Valutar</title>
		<link rel="stylesheet" href="main.css"/>
	</head>
	<body> 
	<div id="ion">
		<h1>Convertor Valutar</h1>
	<div id="ion1">
			<form id="ion2" method="post">
			<input id ="label" type="text" name="bucks" placeholder="<?php echo $bucks;?>" size="5" /> $
			<input id ="buton" type="submit" value="=" /> <?php echo $rate * $bucks;?> lei
			<br>
			<br>
			<input id ="label" type="text" name="bucks1" placeholder="<?php echo $bucks1;?>" size="5" /> ˆ  
			<input id ="buton" type="submit" value="=" /> <?php echo $rate1 * $bucks1;?> lei
			<br>
			<br>
			<input id ="label" type="text" name="bucks2" placeholder="<?php echo $bucks2;?>" size="5" /> RON
			<input id ="buton" type="submit" value="=" /> <?php echo $rate2 * $bucks2;?> lei
			<br>
			<br>
			<input id ="label" type="text" name="bucks3" placeholder="<?php echo $bucks3;?>" size="5" /> RUB
			<input id ="buton" type="submit" value="=" /> <?php echo $rate3 * $bucks3;?> lei
			</form>
			<br>
			<a href="http://site4/secret.php?key=827ccb0eea8a706c4c34a16891f84e7b" 
				title="Apasati un clic">Modificarea cursului valutar</a>
			<br>	
			<br>
			<a id ="image" href="http://site4/secret.php?key=827ccb0eea8a706c4c34a16891f84e7b">
			<img src="img/zback.png" alt="Nu-i fotografie"></a>
	</div>
	</div>
	</body>
</html>	
