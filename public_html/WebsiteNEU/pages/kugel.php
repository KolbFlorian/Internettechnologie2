<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kugel</title>
	
	<link rel="stylesheet" href="../CSS/style.css">
	
</head>

<body>
	<h1>Kugel</h1>
	
	<form method="post">
        <label for="kradius">Radius:</label>
        <input type="number" name="kradius" id="kradius" step="0.01" required>
        <br>
        <input type="submit" value="Berechnen">
    </form>
	
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
        
		// Eingabe aus Formular verarbeiten
		$kradius = doubleval($_POST["kradius"]);

        if ($kradius <= 0) 
			{
            echo "<p>Bitte geben Sie einen Wert größer als 0 an</p>";	
			} 
			else 
				{
            	// Ausgabe der Ergebnisse
            	echo "<h2>Ergebnisse für Radius von $kradius bis " . ($kradius + 20) . ":</h2>";
				echo "<table border='1'>";
            	echo "<tr>
						<th>Radius</th>
                    	<th>Volumen</th>
                    	<th>Oberfläche</th>
                	</tr>";

					// Schleife für die Berechnung und Ausgabe der Wertetabelle
					for ($i = $kradius; 
						 $i <= ($kradius + 20);
						 $i++) 

							{
							$volumen = (4/3) * M_PI * pow($i, 3); //pow= ^2 
							$oberflaeche = 4 * M_PI * pow($i, 2); 

							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>" . number_format($volumen, 2) . " </td>"; //numberformat = nachkommastellen
							echo "<td>" . number_format($oberflaeche, 2) . "</td>";
							echo "</tr>";
							}

            	echo "</table>";
        		}
			}
    ?>

	<?php
		include 'inc/backlink_inc.php'
	?>
	
	
</body>
</html>
