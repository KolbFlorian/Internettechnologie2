<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rechteck-Aufgabe</title>
</head>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

<body>
		<p><input name="seiteA">Seite A</p>
		<p><input name="seiteB">Seite B</p>
		<p><input type="submit"></p>
	<?php
	
		$seiteA=42 ;
		$seiteB=10 ;
		$rechteck=$seiteA*$seiteB;
	
	echo("Das Rechteck ist $rechteck Quadratmeter groß");
	
	?>
<body>
</body>
</html>