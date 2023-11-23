<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Umfrage erstellen</title>
</head>

<body>
	<?php
	/*
	1. Formular erstellen
	2. Was passiert beim Abschicken des Formulars?
		-> Seite ruft sich selbst auf
		> Wann wird der PHP Code für das Eintragen in die DB ausgeführt?
		-> Wenn Siete über eine URL aufgerufen wird, soll der Code ausgeführt werden
			-> If-Verwenden 
	*/
	
	
	if(isset($_POST["gesendet"]))
	{
		include 'include/dbconnect.inc.php'; // Einbinden der Zugangsdaten zur Datenbank
		echo("Formular wurde gesendet");
		$umfragetext = $_POST["umfragetext"];
		echo($umfragetext);
		$sql = "INSERT INTO Umfrage (uid, umfragetext) VALUES (NULL, 'Lieblingsmodul');";
		mysqli_query($con,$sql);
	}	else
		{
		echo("Formular wurde über die URL aufgerufen");
		}
	
	
	/*
	if (Formular abgeschickt)
		dann
			- Verbindung zur Datenbank aufbauen
			- Formularfeld auslesen
			- "speichern als Datenbankeintrag"
				-> Test mit "festem" Datensatz
				$sql = "INSERT INTO `Umfrage` (`uid`, `umfragetext`) VALUES (NULL, \'Lieblingsmodul\');";

	
		sonst
	
	*/
	?>
	<form action="umfrage-erstellen.php" method="post">
	
			<p><input name="umfragetext">Umfragetext</p>
			<p><input type=submit name="gesendet"</p>
	
	</form>	
	
	
</body>
</html>