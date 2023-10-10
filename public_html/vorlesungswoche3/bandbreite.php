<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bandbreite-Aufgabe</title>

	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

</head>
<body>
	<h1>Bandbreitenberechnung</h1>
<?php
	
	
		$datengroesse=50;
		$downloadgeschwindigkeit=16;
		

	echo "<br>";
echo "Die Übertragungszeit von " . $datengroesse . " GB mit einer Downloadgeschwindigkeit von " . $downloadgeschwindigkeit . " Mbit/s liegt bei " . ($datengroesse*1024*8/$downloadgeschwindigkeit/60) . " Minuten."; 
	
	echo "<br>";
	echo "Das sind umgerechnet " . (($datengroesse*1024*8/$downloadgeschwindigkeit/60)/(60)) . " Stunden";
	?>
</body> 
</html>