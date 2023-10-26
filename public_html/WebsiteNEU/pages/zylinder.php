<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>26.10.2023</title>
</head>

<body>

	<!--
1.	Startseite mit Menü
-	Include menu.php mit unordered list <ul>

2.	Über das Menü werden die Unterseiten aufgerufen
-	Punkte der Liste: Kugel, Zylinder, Würfel

3.	Für folgende Figuren sind je eine Seite zu realisieren:

Kugel: Zu berechnen ist das Volumen sowie die Oberfläche. Erfasst werden die Werte über ein HTML-Formular. Alle erfassten Werte müssen größer 0 sein. Sonst wird die Berechnung nicht durchgeführt und eine Fehlermeldung ausgegeben. Ebenfalls ist eine Wertetabelle auszugeben. 

Zylinder: Zu berechnen ist das Volumen (V = π · r2 · h), der Oberflächenbereich (O = 2·π·r·(r+h)) und die Lateralfläche (2 π·r·h). Erfasst werden die Werte über ein HTML-Formular. Alle erfassten Werte müssen größer 0 sein. Sonst wird die Berechnung nicht durchgeführt und eine Fehlermeldung ausgegeben.

Würfel (Kubus): Zu berechnen ist das Volumen, die Mantelfläche und der Oberflächeninhalt. Erfasst werden die Werte über ein HTML-Formular. Alle erfassten Werte müssen größer 0 sein. Sonst wird die Berechnung nicht durchgeführt und eine Fehlermeldung ausgegeben.
Vorgaben:

Für alle Berechnungen sind PHP-Funktionen mit Übergabeparametern und Rückgabewerten zu erstellen.

Möglichst effizient / einfachste Umsetzung (Bedeutet: Möglichst wenig Quellcode, möglichst wenige Seiten, Seiten aufteilen, include-Dateien verwenden, gute Seitenstruktur etc.)

Für jeden Körper ist eine Wertetabelle auszugeben. Sie entscheiden selbst, welcher Wert oder welche Werte, ausgehend von den erfassten Werten, hochgezählt werden. 

Zusammenarbeit erfolgt über GitHub


	-->
	<h1>IT2 - 26. Oktober 2023</h1>
	<h2>Geben Sie nachfolgend den Radius sowie die Höhe an, um die Oberfläche, Mantelfläche und das Volumen zu berechnen!</h2>
	
	<form action="zylinder.php" method="post">
		<p><input name="zradius"> Radius (in cm)</p>
		<p><input name="zhoehe"> Höhe (in cm)</p>
		<p><input type="submit"></p>
	</form>
	
		<?php
	// Höhe aus html übernehmen
	$zhoehe=$_POST["zhoehe"];
	$zradius=$_POST["zradius"];
		
	// Zeichenkette in Zahlenwerte umwandeln
	$zhoehe=doubleval($zhoehe);
	$zradius=doubleval($zradius);
	
	// Rechnung durchführen
	if($zradius && $zhoehe > 0)
		{
		$zoberflaeche=2*M_PI*$zradius*($zradius+$zhoehe);
			
		echo  " <p><h2> Oberfläche: 2 · π · $zradius·($zradius+$zhoehe) = $zoberflaeche [cm^2]</h2></p>";
		}
			else
			{
				echo "<h1>Beide Werte müssen größer 0 sein!</h1>";
			}
	
	if($zradius && $zhoehe > 0)
		{
		$zmantelflaeche=2*M_PI*$zradius*$zhoehe;
		
		echo  " <p><h2> Mantelfläche: 2 · π · $zradius·$zhoehe = $zmantelflaeche [cm^2]</h2></p>";
		}
			else
			{
				echo "<h1>Beide Werte müssen größer 0 sein!</h1>";
			}
	
	
	if($zradius && $zhoehe > 0)
		{
		$zvolumen=M_PI*($zradius*$zradius)*$zhoehe;
		
		echo  " <p><h2> Volumen: π · $zradius·$zradius·$zhoehe = $zvolumen [cm^3]</h2></p>";
		
		echo "<table border = 1>";
		echo "<tr>
					<th>Radius</th>
					<th>Höhe</th>
                    <th>Oberfläche [cm^2]</th>
                    <th>Mantelfläche [cm^2]</th>
					<th>Volumen [cm^3]</th>
              </tr>";
			
			for ( $r = $zradius; 
		  	$r <= ($zradius + 20);
		  	$r++
		  ) 
				
					{
              
                	$zoberflaeche=2*M_PI*$r*($r+$zhoehe);
		  			$zmantelflaeche=2*M_PI*$r*$zhoehe;
		  			$zvolumen=M_PI*($r*$r)*$zhoehe;
					$h=$r-$zradius+$zhoehe;

					echo "<tr>";
					echo "<td>$r</td>";
					echo "<td>$h</td>";
					echo "<td>" . number_format($zoberflaeche, 2) . "</td>";
					echo "<td>" . number_format($zmantelflaeche, 2) . "</td>";
		  			echo "<td>" . number_format($zvolumen, 2) . "</td>";
					echo "</tr>";
					
	  				}
		  
	echo "</table>";
		}
			
	else
			{
				echo "<h1>Beide Werte müssen größer 0 sein!</h1>";
			}
	
	
	?>
	
	<?php
		include 'inc/backlink_inc.php'
	?>
	
	
</body>
</html>