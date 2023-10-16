<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Schleifen</title>
</head>

<body>
	<h1>Schleifen</h1>
	<table border="1">
	<?php
	
	//for(start;Endbedingung;Schrittweite)
	for ($zeilenzaehler = 1;$zeilenzaehler <= 10;$zeilenzaehler ++)
		{
		echo "<tr>";
			
		for ($spaltenzaehler = 1;$spaltenzaehler <= 10;$spaltenzaehler ++)
		{
			$ergebnis = $zeilenzaehler * $spaltenzaehler;
			
			echo "<td>";
			echo $ergebnis;
			echo "</td>";
		}
			echo "</tr>";
	}
	?>
	</table>
	
	
</body>
</html>