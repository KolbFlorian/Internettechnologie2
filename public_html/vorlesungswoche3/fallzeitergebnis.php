<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fallzeit Ergebnis</title>
	
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

</head>
	

<body>
	<h1>So schnell ist Deine Fallzeit!</h1>
	
	<?php
	
	// Zahlen aus Mathe übernehmen
	$hoehe=$_POST["hoehe"];
	$himmelskoerper=$_POST["himmelskoerper"];
		
	// Zeichenkette in Zahlen umwandeln
	$hoehe=intval($hoehe);
	$himmelskoerper=intval($himmelskoerper);
	$erde=$himmelskoerper+"erde";
	
	
	if($hoehe>15)
		{
		// Rechnung durchführen
		$fallzeitergebnis=sqrt((2*$hoehe)/($himmelskoerper));
	
		// Ergebnis ausgeben
		echo  " Die Wurzel aus (2 * $hoehe / $himmelskoerper = ".$fallzeitergebnis;
		}
	else if ($himmelskoerper="erde")
	{
		$fallzeitergebnis=sqrt((2*$hoehe)/(9.81));
		
	}
			else
				{
				echo "Die Höhe muss größer als 15 sein";
			
				}
		
				
	?>

</body>
</html>