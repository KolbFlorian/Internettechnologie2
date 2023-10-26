<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
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
			
		echo  " <p><h2> Oberfläche: 2·π·$zradius·($zradius+$zhoehe) = $zoberflaeche [cm^2]</h2></p>";
		}
			else
			{
				echo "<h1>Beide Werte müssen größer 0 sein!</h1>";
			}
	
	if($zradius && $zhoehe > 0)
		{
		$zmantelflaeche=2*M_PI*$zradius*$zhoehe;
		
		echo  " <p><h2> Mantelfläche: 2·π·$zradius·$zhoehe = $zmantelflaeche [cm^2]</h2></p>";
		}
			else
			{
				echo "<h1>Beide Werte müssen größer 0 sein!</h1>";
			}
	
	
	if($zradius && $zhoehe > 0)
		{
		$zvolumen=M_PI*($zradius*$zradius)*$zhoehe;
		
		echo  " <p><h2> Volumen: π·$zradius·$zradius·$zhoehe) = $zvolumen [cm^3]</h2></p>";
		}
			else
			{
				echo "<h1>Beide Werte müssen größer 0 sein!</h1>";
			}
	
	
	// Ergebnis ausgeben
	
	?>
	<!--

	// Zusatz: Verzweigungen mit if
	
	/* Vergleichsoperatoren
	== gleich
	!= ungleich
	< kleiner als
	> größer als
	>= größer gleich
	<= kleiner gleich
	
	*/

	if($zeilenzaehler1>=5)
		{
		// Rechnung durchführen
		$ergebnis=$zeilenzaehler1+$zeilenzaehler2;
	
		// Ergebnis ausgeben
		echo  " $zeilenzaehler1 + $zeilenzaehler2 = ".$ergebnis;	
		}
			else
				{
				echo "zeilenzaehler 1 muss größer 5 sein"
		
				}
	//-->
	
</body>
</html>