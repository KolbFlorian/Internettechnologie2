<!doctype html>
<html>
<head>	
<meta charset="utf-8">
<title>Florian = Brillenschlange</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>
<body>
	
		<table border="1">
	<?php
	                                          //zeilen Start ; Ende ; Schrittweite
		for($zeilenzaehler = 1;               //startwert zeilenzahler = 1
		   $zeilenzaehler <= 10;              // wenn <=8 geht weiter, wenn nicht wird abgebrochen
		   $zeilenzaehler ++ )                // -> zeilenzähler + 1 (++) also Dann zeilenzähler = 2 , (--) = - 1 
		
		{
			echo "<tr>";
			
			for($spaltenzaehler = 1;
			   $spaltenzaehler <= 10;
			   $spaltenzaehler ++ )
				
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