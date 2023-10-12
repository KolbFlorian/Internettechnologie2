<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fallzeit Ergebnis</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
	

<body>
	<h1>So schnell ist Deine Fallzeit!</h1>
	
	<?php
	
	// zeilenzaehleren aus Mathe übernehmen
	$hoehe = $_POST["hoehe"];
	$himmelskoerper = $_POST["himmelskoerper"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$hoehe = intval($hoehe);
	$himmelskoerper = intval($himmelskoerper);
	$erde = $himmelskoerper . "erde";
	$mond = $himmelskoerper . "mond";
	$mars = $himmelskoerper . "mars";
	$jupiter = $himmelskoerper . "jupiter";

	
	$erde = 9.81;
	$mond = 1.62;
	$mars = 3.69;
	$jupiter = 24.79; 
	
	if($hoehe>15)
		{ 
		if ($himmelskoerper == "Erde") 
			{
            $fallzeitergebnis = sqrt((2 * $hoehe) / $erde);
			}
		elseif ($himmelskoerper == "Mond") 
			{
            $fallzeitergebnis = sqrt((2 * $hoehe) / $mond);
			} 
		elseif ($himmelskoerper == "Mars") 
			{
            $fallzeitergebnis = sqrt((2 * $hoehe) / $mars);
			} 
		elseif ($himmelskoerper == "Jupiter") 
			{
            $fallzeitergebnis = sqrt((2 * $hoehe) / $jupiter);
        	}
			echo  " Die Wurzel aus (2 * $hoehe / $himmelskoerper = $fallzeitergebnis"; 
	    }
	else
		{
		echo "Die Höhe muss größer als 15 sein";
		}
	
	?>

</body>
</html>