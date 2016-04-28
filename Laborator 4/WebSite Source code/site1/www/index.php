<?php
	$h = date("H");
	if($h >= 6 && $h < 12)
		$img = "morning";				
	elseif($h >= 12 && $h < 18)
		$img = "day"; 			    
	elseif($h >= 18 && $h < 24)
		$img = "evening";				
	else
		$img = "night";				
?>

<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN" 
					   "http://www.w3.org/TR/html4/loose.dtd">
						
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>TITLE</title>
	</head>
	<body style="width: 100%; 
				 height: 1308px; 
				 background: url(img/<?php echo $img;?>.jpg); 
				 background-size: cover;">
		<h1><?php echo $h;?></h1>
	</body>
</html>	