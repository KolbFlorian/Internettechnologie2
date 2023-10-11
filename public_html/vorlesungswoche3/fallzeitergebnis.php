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
	/*
	if($himmelskoerper="erde")
		{
		$himmelskoerper=9.81;
		
	if($himmelskoerper="mond")
		{
		$himmelskoerper=1.62;
		
	if($himmelskoerper="mars")
		{
		$himmelskoerper=3.69;
		
	if($himmelskoerper="jupiter")
		{
		$himmelskoerper=24.79;
		}
		}
		}
		}
	
	switch ($himmelskoerper)
	{
		case "erde": $himmelskoerper=9.81;break;
		case "mond": $himmelskoerper=1.62;break;
		case "mars": $himmelskoerper=3.69;break;
		case "jupiter": $himmelskoerper=24.79;break;	
		default : "Wäre cool wenn Du einer von vier Planeten nimmst";break;
	}
	
	*/
	
	$himmelskoerper=array("erde","mond","mars","jupiter");
		
		if($himmelskoerper[0])
		{
			$himmelskoerper=9.81;
		}
	
	
		if($himmelskoerper[1])
		{
			$himmelskoerper=1.62;
		}
	
		if($himmelskoerper[2])
		{
			$himmelskoerper=3.69;
		}
	
		if($himmelskoerper[3])
		{
			$himmelskoerper=24.79;
		}
	
		
		if($hoehe>15)
		{
		$fallzeitergebnis=sqrt((2*$hoehe)/($himmelskoerper));
		echo  " sqrt( 2* $hoehe m / $himmelskoerper m/s) =  ".$fallzeitergebnis. " s";
		}

			else
				{
				echo "Die Höhe muss größer als 15 sein";
				}
		
				
	?>

</body>
</html>