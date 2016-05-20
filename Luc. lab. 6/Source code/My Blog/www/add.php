<?php
		if($_GET['key'] != md5('12345'))
	{
		header('location: login.php');
		exit();
	}
	
	$connect = mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("bdblog"); 
	
	if(isset($_POST["submit"])){
		$title = $_POST["title"];
		$m_desc = $_POST["m_desc"];
		$desc = $_POST["desc"];
		$query = mysql_query("INSERT INTO data VALUES('','$title','$m_desc','$desc')") or die(mysql_error());
	}	
?>
<title>Add articles into Blog</title>
<a href="http://site8/"><input type="submit" name="submit" value="My Blog" /></a>
<h1>Add the new article into Blog</h1>
<form method="post" action="add.php">
	<textarea type="text" name="title" placeholder=" Titlul" required ></textarea><br><br>
	<textarea type="text" name="m_desc" placeholder=" Mini Description" cols="55" rows="6" required ></textarea><br><br>
	<textarea type="text" name="desc" placeholder=" Description" cols="55" rows="10" required ></textarea><br><br>
	<input type="submit" name="submit" value="Register Article" />
</form>
















