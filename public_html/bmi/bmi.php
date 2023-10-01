<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BMI-Aufgabe</title>
</head>
	<body>
<h1>BMI-Berechnung</h1>
<?php 
		
		$koerpergewicht=65;
		$koerpergroesse=175;
		$x=($koerpergewicht/$koerpergroesse);
	
echo "Dein BMI liegt bei " . (($koerpergewicht/$koerpergroesse/$koerpergroesse)*10000) ;

	?>
</body>
</html>