<?php
	$h = date("H");
	$i = date("i");	
	
	if(($h == 1) || ($h == 21))
		$hs = '���';
	elseif(($h <= 4) || ($h >= 22))
		$hs = '����';
	else
		$hs = '�����';
	
	if($i < 10)
		$i0 = $i;
	else
		$i0 = ($i % 10);
	if(($i >= 10) && ($i <= 20))
		$is = '�����';
	elseif($i0 == 1)
		$is = '������';
	elseif($i0 >= 2 && $i0 <= 4)
		$is = '������';
	else
		$is = '�����';
?>

<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN" 
					   "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>TITLE</title>
	</head>
	<body> 
		<? echo "$h $hs $i $is";?>
	</body>
</html>	