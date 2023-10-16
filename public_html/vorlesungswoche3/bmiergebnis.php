<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BMI-Rechner</title>
		<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">

</head>
	<h1>Berechne deinen BMI!</h1>
	<body>
<?php
	//Daten aus BMI übernehmen
	$koerpergewicht=$_POST["koerpergewicht"];
	$koerpergroesse=$_POST["koerpergroesse"];
		
	// Zeichenkette in zeilenzaehleren umwandeln
	$koerpergewicht=intval($koerpergewicht);
	$koerpergroesse=intval($koerpergroesse);	
	
	if($koerpergewicht>40&$koerpergewicht<150&&$koerpergroesse<=210)
	{
		// Rechnung durchführen
		$ergebnis=(($koerpergewicht/($koerpergroesse*$koerpergroesse))*10000);
	
		// Ergebnis ausgeben
		echo  " Dein BMI-Wert beträgt = ".$ergebnis;
    }
	else echo("Das Gewicht muss zwischen 40 und 150 kg liegen und die Größe darf 210 cm nicht überschreiten")
			
	?>
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
	<table width="200" border="1">
  <thead>
	<tr>
      <th scope="col">Gewicht [kg]</th>
      <th scope="col">BMI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>65</td>
      <td>22,5</td>
    </tr>
    <tr>
      <td>66</td>
      <td>22,8</td>
    </tr>
    <tr>
      <td>67</td>
      <td>23,2</td>
    </tr>
    <tr>
      <td>68</td>
      <td>23,5</td>
    </tr>
	  <tr>
      <td>69</td>
      <td>23,8</td>
    </tr>
	  <tr>
      <td>70</td>
      <td>24,2</td>
    </tr>
	  <tr>
      <td>71</td>
      <td>24,5</td>
    </tr>
	  <tr>
      <td>72</td>
      <td>24,9</td>
    </tr>
	  <tr>
      <td>73</td>
      <td>25,2</td>
    </tr>
	  <tr>
      <td>74</td>
      <td>25,6</td>
    </tr>
	  <tr>
      <td>75</td>
      <td>25,9</td>
    </tr>
  </tbody>
	
</table>
</body>
</html>