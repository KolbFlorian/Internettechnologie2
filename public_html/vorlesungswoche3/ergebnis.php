<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Unbenanntes Dokument</title>
</head>
	

<body>
	<h1>Dein Ergebnis!</h1>
	
	<?php
	
	// zeilenzaehleren aus Mathe übernehmen
	$zeilenzaehler1=$_POST["zeilenzaehler1"];
	$zeilenzaehler2=$_POST["zeilenzaehler2"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$zeilenzaehler1=intval($zeilenzaehler1);
	$zeilenzaehler1=intval($zeilenzaehler1);
	
	// Rechnung durchführen
	$ergebnis=$zeilenzaehler1+$zeilenzaehler2;
	
	// Ergebnis ausgeben
	echo  " $zeilenzaehler1 + $zeilenzaehler2 = ".$ergebnis;
	
	?>


</body>
</html>