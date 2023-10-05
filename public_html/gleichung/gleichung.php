<!DOCTYPE html>
<html>
<head>
    <title>Gleichungsberechner</title>
</head>
<body>
    <h1>Gleichungsberechner</h1>
	
	<p>y=a*x3+b*x2+c*x+d</p>    
	
	<form method="post">
        <label for="a">a:</label>
        <input type="text" name="a" id="a" required>
        <br>
        <label for="b">b:</label>
        <input type="text" name="b" id="b" required>
        <br>
        <label for="c">c:</label>
        <input type="text" name="c" id="c" required>
        <br>
        <label for="d">d:</label>
        <input type="text" name="d" id="d" required>
        <br>
        <label for="x">x:</label>
        <input type="text" name="x" id="x" required>
        <br>
        <input type="submit" value="Berechnen">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Eingabe aus Formular verarbeiten
        $a = floatval($_POST["a"]);
        $b = floatval($_POST["b"]);
        $c = floatval($_POST["c"]);
        $d = floatval($_POST["d"]);
        $x = floatval($_POST["x"]);

        // Berechnung der Gleichung
        $y = ($a * pow($x, 3)) + ($b * pow($x, 2)) + ($c * $x) + $d;

        // Ergebnis ausgeben
        echo "<p>Ergebnis für y = $a*x^3 + $b*x^2 + $c*x + $d bei x = $x: $y</p>";
    }
    ?>
</body>
</html>
