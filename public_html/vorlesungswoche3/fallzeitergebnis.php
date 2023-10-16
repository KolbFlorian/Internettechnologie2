<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fallzeit Ergebnis</title>
	
	<link rel="stylesheet" type="text/css" href="../steffen/vorlesungswoche3/style.css">

</head>
	

<body>
	<h1>So schnell ist Deine Fallzeit!</h1>
	
	<table width="200" border="1">
  <thead>
	<tr>
      <th scope="col">Höhe [m]</th>
      <th scope="col">Zeit [s]</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>15</td>
      <td>1,7</td>
    </tr>
    <tr>
      <td>20</td>
      <td>2,0</td>
    </tr>
    <tr>
      <td>25</td>
      <td>2,2</td>
    </tr>
    <tr>
      <td>30</td>
      <td>2,4</td>
    </tr>
  </tbody>
	
</table>
	
	
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
	
/*
	
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
	*/
	
	?>

</body>
</html>