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
        <input type="text" name="sl" id="sl" required> <br>
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
	/*	echo "Bei einer Seitenlänge von $sl cm beträgt "; echo("<br>");
		echo "das Volumen des Würfels =    ".$wvolumen; echo("<br>");
		echo "die Mantelfläche =    ".$wmantel;echo("<br>");
		echo "und die Oberfläche    = ".$woberfl;
		echo "Bei einer Seitenlänge von $sl cm beträgt:<br>"; */
echo "<table>";
echo "<tr>";
echo "<td>Das Volumen des Würfels</td>";
echo "<td>" . $wvolumen . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Die Mantelfläche</td>";
echo "<td>" . $wmantel . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Die Oberfläche</td>";
echo "<td>" . $woberfl . "</td>";
echo "</tr>";
echo "</table>";
    }
	// Wertetabelle
		echo "<h2>Wertetabelle</h2>";
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>Seitenlänge</th>";
		echo "<th>Volumen</th>";
		echo "<th>Mantelfläche</th>";
		echo "<th>Oberfläche</th>";
		echo "</tr>";
	
	 		$lower_bound = $sl - 5;
		$upper_bound = $sl + 5;
		
		for ($i = $lower_bound; $i <= $upper_bound; $i++) {
			$volumen = $i * $i * $i;
			$mantelflaeche = 4 * $i * $i;
			$oberflaeche = 6 * $i * $i;
			
			// Markieren Sie den eingegebenen Wert fett
			$style = ($i == $sl) ? 'font-weight:bold;' : '';
			
			echo "<tr>";
			echo "<td style='$style'>$i</td>";
			echo "<td>" . number_format($volumen, 2) . "</td>";
			echo "<td>" . number_format($mantelflaeche, 2) . "</td>";
			echo "<td>" . number_format($oberflaeche, 2) . "</td>";
			echo "</tr>";
		}
		echo "</table>";
	
	?>
	
	<!--<br>
	 Für jeden Körper ist eine Wertetabelle auszugeben. Sie entscheiden selbst, welcher Wert oder welche Werte, ausgehend von den erfassten Werten, hochgezählt werden. 
	
		<p><table border="1">
	<tr><th>Seitenlänge</th><th>Volumen</th><th>Mantelfläche</th><th>Oberfläche</th></tr>
	<td>5</td><td>125</td><td>100</td><td>150</td></tr>
	<tr><td>10</td><td>1000</td><td>400</td><td>600</td></tr>
	<tr><td>30</td><td>27000</td><td>3600</td><td>5400</td></tr> -->
	

</body>
</html>