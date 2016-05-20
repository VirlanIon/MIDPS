<?php	
	if(!empty($_POST))
	{
		header('location: secret.php?key=' . md5($_POST['login']));
		exit(); 
	}
	require_once"fonul.php";
	include('sound.html');
?>
<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN" 
					   "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Verificarea IDENTITATII</title>
		<link rel="stylesheet" href="main.css"/>
		<script>
		var connect = new Audio();
		connect.src = "connect.mp3";			
		</script>
	</head>
	<body> 
	<div id="ion">
		<h1>Pentru a modifica cursul valutar:<br/><br/>autoindentificati-va:</h1>
	<div id="ion1">
		<form id="ion2" method="post">
			Parola:<br/>
			<input id ="label" type="password" name="login" /><br/>
			<input id ="buton" type="submit" value="INTRARE" /><br/>
		</form>
		<br>	
		<br>
		<nav>
		<img src="img/buton.png" onmousedown="connect.play()" alt="Nu-i fotografie">
		</nav>
	</div>
	</div>
	</body>
</html>	