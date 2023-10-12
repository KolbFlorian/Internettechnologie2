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
	
	// zeilenzaehleren aus Mathe übernehmen
	$hoehe=$_POST["hoehe"];
	$himmelskoerper=$_POST["himmelskoerper"];
	
		
	// Zeichenkette in zeilenzaehleren umwandeln
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
	
	
	PROBLEM BEI MIR: VARIABLE HAT SICH SELBST ÜBERSCHRIEBEN. LÖSUNG: EINE VARIABLE MEHR DEKLARIEREN*/
	
	
	
	
	/*
	Musterlösung Vorlesung
	
	<?php
		$hoehe=doubleval($_POST["hoehe"]);
		$ort= $_POST["ort"];
		$minHoehe=15;
		
		/*
		if($himmelskoerper=="Erde")
			{
				 $fallbeschleunigung = 9.81;
			} 
			else if ($ort=="Mond")
				{
				 	$fallbeschleunigung = 1.62;
				}
					else if ($ort=="Mars")
					{
						$fallbeschleunigung = 3.69;
					}
						else if ($ort=="Jupiter")
						{
							$fallbeschleunigung = 24.79;
						}
		
		
		if($hoehe>$minHoehe)
		{
			$zeit= (sqrt((2*$hoehe)/($fallbeschleunigung))); 
			$ergebnis = "Die Fallzeit aus einer Höhe von $hoehe m auf dem $ort beträgt $zeit s.";
			
		} else
		{
			$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Die Höhe muss min.".$minHoehe." m betragen.";
		}
		
			
		
	?>
	
	*/
	
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