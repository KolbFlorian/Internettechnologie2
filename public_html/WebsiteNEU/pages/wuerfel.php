<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Würfel-Berechnung</title>
</head>

<body>
	<h1>Mathematische Berechnung eines Würfels</h1>
	<form action="wuerfel.php" method="post">
        <label for="sl">Seitenlänge des Würfels in cm:</label>
        <input type="text" name="sl" id="sl" required>
        <br>
        
        <input type="submit" value="Berechnen">
    </form> <br>
	<?php
	//Daten aus Würfel übernehmen
	$sl=$_POST["sl"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$sl=doubleval($sl);
	
	if($sl>0)
	{
		// Rechnung durchführen
		$wvolumen=($sl*$sl*$sl);
		$wmantel=((($sl*$sl)*4));
		$woberfl=(6*($sl*$sl));
	
		// Ergebnis ausgeben
		echo  " Das Volumen beträgt = ".$wvolumen; echo("<br>");
		echo "Die Mantelfläche ...= ".$wmantel;echo("<br>");
		echo "Die Oberfläche ...= ".$woberfl;
    }
	else echo("Die Seitenlänge muss größer als 0 sein")
			
	?>
	<br>
	 Für jeden Körper ist eine Wertetabelle auszugeben. Sie entscheiden selbst, welcher Wert oder welche Werte, ausgehend von den erfassten Werten, hochgezählt werden. 
	
		<p><table border="1">
			<tr>
				<th>Seitenlänge</th><th>Volumen</th><th>Mantelfläche</th><th>Oberfläche</th>
			</tr>
			<td>5</td><td>125</td><td>100</td><td>0</td></tr>
			<td>10</td><td>125</td><td>100</td><td>0</td>

			
	</table></p>
	
</body>
</html>