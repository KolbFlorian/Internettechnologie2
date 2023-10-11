<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tankkostenergebnis</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>So viel kostet dich die Reise</h1>
    
    <?php
    
    if (isset($_POST["liter"]) && isset($_POST["preisProLiter"]) && isset($_POST["kraftstoff"])) 
		{
        $liter = floatval($_POST["liter"]);
        $preisProLiter = floatval($_POST["preisProLiter"]);
        $kraftstoff = $_POST["kraftstoff"];
        
        if ($liter > 10) 
			{
            $tankkosten = $liter * $preisProLiter;
            echo "<table>";
            echo "<tr><th>Menge [l]</th><th>Preis [Euro]</th></tr>";
            echo "<tr><td>$liter</td><td>$tankkosten</td></tr>";
            echo "</table>";
        	} 
		else 
			{
            echo "Bitte mehr als 10 Liter angeben";
        	}
    	}
	else 
		{
        echo "Bitte füllen Sie alle erforderlichen Felder aus.";
    	}
    ?>
</body>
</html>
