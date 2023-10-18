<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung des freien Falls eines Handys</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>

<body>
	<?php
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$hoehe=doubleval($_POST["hoehe"]);
			$fallbeschleunigung =doubleval($_POST["ort"]);
			$minHoehe=15;


			if($hoehe>=$minHoehe)
			{
				$zeit= (sqrt((2*$hoehe)/($fallbeschleunigung))); 
				$ergebnis = "Die Fallzeit aus einer Höhe von $hoehe m beträgt $zeit s.";

			} else
			{
				$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Die Höhe muss min.".$minHoehe." m betragen.";
			}
		}
	?>
	
	<h1>Berechnung des freies Falls eines Handys</h1>
	<form action="fallzeitDialogListeEineSeite.php" method="post">	
		<p>
			<label for="hoehe">Höhe:</label>
			<input id="hoehe" name="hoehe"> 
		</p>
		<p>
			<label for="ort">Ort:</label> 
         	<select name="ort" id="ort">
			  <!--- Die Inhalte bspw. einer Dialogliste werden später aus einer Datenbank gefüllt. --->
			  <option value="9.81">Erde</option>
			  <option value="1.62">Mond</option>
			  <option value="3.69">Mars</option>
			  <option value="24.79">Jupiter</option>
          	</select>
		</p>
		<p><input type="submit" name="gesendet"</p>
	</form>
	
	<!-- PHP Code kann mehrfach im Dokument eingesetzt werden --->
	<p>
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine 
				Höhe erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submitt-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo $ergebnis;
					}
		?>
	</p>
	
	<p><a href="fallzeitDialogListeEineSeite.php">Neue Berechnung?</a></p>
	
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			include 'fallzeitTabelle_inc.php'; 
			include '../backLink_inc.php'; 
	?>
	
</body>
</html>