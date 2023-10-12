<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mathe Übung</title>
</head>
	<h1>IT2 - 05. Oktober 2023</h1>
	<form action="ergebnis.php" method="post">
		<p><input name="zeilenzaehler1">Erste zeilenzaehler</p>
		<p><input name="zeilenzaehler2">Zweite zeilenzaehler</p>
		<p><input type="submit"></p>
	</form>
	
	<?php
	$zeilenzaehler1="2";
	$zeilenzaehler2="2";
	
	
	echo intval($zeilenzaehler1)."<br>";
	echo intval($zeilenzaehler2)."<br>";
	
	
	$summe=$_POST["zeilenzaehler1"]+$_POST["zeilenzaehler2"];
	echo intval($summe)."<br>";
	?>
<body>
</body>
</html>