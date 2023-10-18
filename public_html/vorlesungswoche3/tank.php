<!DOCTYPE html>
<html>
<head>
    <title>Tankkostenrechner</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>
<body>
    <h1>Tankkostenrechner</h1>
    <form method="post">
        <label for="liter">Liter:</label>
        <input type="text" name="liter" id="liter" required>
        <br>
        <label for="preisProLiter">Preis pro Liter (in Euro):</label>
        <input type="text" name="preisProLiter" id="preisProLiter" required>
        <br>
        <input type="submit" value="Berechnen">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Eingabe aus Formular verarbeiten
        $liter = floatval($_POST["liter"]);
        $preisProLiter = floatval($_POST["preisProLiter"]);

        // Sicherstellen, dass die Eingabe gültige zeilenzaehleren sind
        if (!is_numeric($liter) || !is_numeric($preisProLiter)) {
            echo "<p>Bitte geben Sie gültige zeilenzaehleren ein.</p>";
			
        } else {
            // Berechnung der Tankkosten
            $tankkosten = $liter * $preisProLiter;

            // Ergebnis ausgeben
            echo "<p>Die Tankkosten für $liter Liter bei einem Preis von $preisProLiter Euro pro Liter betragen: $tankkosten Euro</p>";
			
			//Tabelle erstellen und ausgeben
			echo "<table border='1'>";   
				echo "<tr>
						<th>Liter</th>
						<th>Preis pro Liter (in Euro)</th>
						<th>Gesamtpreis (in Euro)</th>
					</tr>";

				// Berechnung der Tankkosten für 20 Einträge
				for ($schleifenzaehler = $liter + 0 ; 
					 $schleifenzaehler <= $liter + 20 ; 
					 $schleifenzaehler ++) 
						{
						$tankkosten = $schleifenzaehler * $preisProLiter + $liter * $preisProLiter;
						echo "<tr>";
							echo "<td>$schleifenzaehler</td>";
							echo "<td>$preisProLiter$</td>";
							echo "<td>$tankkosten$</td>";
						echo "</tr>";
						}
		        }
		}
    ?>	
	
	
	<form action="tank.php" method="post">	
		<p>
			<label for="menge">Menge:</label>
			<input id="menge" name="menge"> 
		</p>
		<p>
			<label for="kraftstoffart">Kraftstoff:</label> 
         	<select name="kraftstoffart" id="kraftstoffart">
			  <!--- Die Inhalte bspw. einer Dialogliste werden später aus einer Datenbank gefüllt. --->
			  <option value="1.59">Benzin</option>
			  <option value="1.67">Super E10</option>
			  <option value="1.74">Super E5</option>
          	</select>
		</p>
		<p><input type="submit" name="gesendet"</p>
	</form>
	
	<p>
	
		
	
	<?php
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$menge=doubleval($_POST["menge"]);
			$preisProLiter =doubleval($_POST["kraftstoffart"]);
			$minTankMenge=10;


			if($menge>=$minTankMenge)
			{
				$preis=$menge*$preisProLiter; 
				$ergebnis = "Der Preis beträgt $preis €";
				
				
				//tabelle erstellen und anzeigen 
				echo "<table border='1'>";   
				echo "<tr>
						<th>Liter</th>
						<th>Preis pro Liter (in Euro)</th>
						<th>Gesamtpreis (in Euro)</th>
					</tr>";

				// Berechnung der Tankkosten für 20 Einträge
				for ($schleifenzaehler = $menge + 0 ; 
					 $schleifenzaehler <= $menge + 20 ; 
					 $schleifenzaehler ++) 
						{
						$tankkosten = $schleifenzaehler * $preisProLiter + $menge * $preisProLiter;
						echo "<tr>";
							echo "<td>$schleifenzaehler</td>";
							echo "<td>$preisProLiter$</td>";
							echo "<td>$tankkosten$</td>";
						echo "</tr>";
						}
				

			} else
				{
					$ergebnis = "Die Berechnung konnte nicht durchgeführt werden. Die Menge muss min".$minTankMenge."l betragen";
				}
		}
		
	?>
	
	
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine Menge erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submit-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo $ergebnis;
					}
		?>
	</p>
	
	<p><a href="tank.php">Neue Berechnung?</a></p>
	
	
	<?php  
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			include 'tankTabelle_inc.php'; 
			include '../backLink_inc.php'; 
	?>

	
</body>
</html>
