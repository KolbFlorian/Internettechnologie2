<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mathe Übung</title>
</head>
	<h1>IT2 - 05. Oktober 2023</h1>
	<form action="ergebnis.php" method="post">
		<p><input name="zahl1">Erste Zahl</p>
		<p><input name="zahl2">Zweite Zahl</p>
		<p><input type="submit"></p>
	</form>
	
	<?php
	$zahl1="2";
	$zahl2="2";
	
	
	echo intval($zahl1)."<br>";
	echo intval($zahl2)."<br>";
	
	
	$summe=$_POST["zahl1"]+$_POST["zahl2"];
	echo intval($summe)."<br>";
	?>
<body>
</body>
</html>