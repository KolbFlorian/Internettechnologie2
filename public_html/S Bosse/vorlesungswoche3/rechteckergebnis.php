<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Rechteck Ergebnis</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
	

<body>
	<h1>So groß ist Dein Rechteck!</h1>
	
	<?php
	
	// Zahlen aus Mathe übernehmen
	$seiteA=$_POST["seiteA"];
	$seiteB=$_POST["seiteB"];
		
	// Zeichenkette in Zahlen umwandeln
	$seiteA=intval($seiteA);
	$seiteB=intval($seiteB);
	
	if ($seiteA >= 1 && $seiteB >= 1) 
		{ 
		$rechteckergebnis=$seiteA*$seiteB;
		echo  " $seiteA * $seiteB = ".$rechteckergebnis."qm";
		}
	else
		{
		echo " Die Seiten müssen mindestens 1 Lang sein";
		}
	
	

	
	?>


</body>
</html>