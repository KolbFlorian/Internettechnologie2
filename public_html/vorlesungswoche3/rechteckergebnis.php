<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Rechteck Ergebnis</title>

<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

</head>
	

<body>
	<h1>So groß ist Dein Rechteck!</h1>
	
	<?php
	
	// zeilenzaehleren aus Mathe übernehmen
	$seiteA=$_POST["seiteA"];
	$seiteB=$_POST["seiteB"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$seiteA=intval($seiteA);
	$seiteB=intval($seiteB);
	
	if($seiteA=0)
	{
		echo "Seite B darf nicht null sein!";
	}
	
	elseif ($seiteB=0)
	{
		echo "Seite B darf nicht null sein!";
		
	}
	else 
	{
		$rechteckergebnis=$seiteA*$seiteB;
		echo  " $seiteA * $seiteB = ".$rechteckergebnis."qm";
	}
	
	?>


</body>
</html>