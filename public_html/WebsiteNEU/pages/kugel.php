<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Kugel</title>
</head>

<body>
	<h1>Kugel</h1>
	
	<form method="post">
        <label for="kradius">Radius:</label>
        <input type="text" name="kradius" id="kradius" required>
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
				// Berechnung des Volumens (V) der Kugel V = (4/3) * π * r^3
				$kvolumen = (4/3) * M_PI * pow($kradius, 3);

				// Berechnung der Oberfläche (A) der Kugel A = 4 * π * r^2
				$koberflaeche = 4 * M_PI * pow($kradius, 2);

				// Ausgabe der Ergebnisse
				echo "Radius: " . $kradius . "<br>";
				echo "Volumen der Kugel: " . $kvolumen . "<br>";
				echo "Oberfläche der Kugel: " . $koberflaeche;
				}
		}
    ?>	
</body>
</html>
