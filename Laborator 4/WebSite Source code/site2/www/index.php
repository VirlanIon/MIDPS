<?php
	$rate = 20.25;
	$rate1 = 22.13;
	
	if(isset($_POST['bucks']))
		$bucks = $_POST['bucks'];
	else 
		$bucks = 0;
	if(isset($_POST['bucks1']))
		$bucks1 = $_POST['bucks1'];
	else 
		$bucks1 = 0;
?>

<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN" 
					   "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>TITLE</title>
	</head>
	<body> 
		<h1><p>Elaborat Virlan Ion     Calculator valutar la cursul de:</p>1 $ = 20.25 lei<br>1 ˆ = 22.13 lei</h1>
		<form method="post">
			<input type="text" name="bucks" placeholder="<?php echo $bucks;?>" size="5" /> $
			<input type="submit" value="=" /> <?php echo $rate * $bucks;?> lei
			<br>
			<input type="text" name="bucks1" placeholder="<?php echo $bucks1;?>" size="5" /> ˆ
			<input type="submit" value="=" /> <?php echo $rate1 * $bucks1;?> lei
		</form>
	</body>
</html>	