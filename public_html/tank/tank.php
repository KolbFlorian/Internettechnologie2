<!DOCTYPE html>
<html>
<head>
    <title>Tankkostenrechner</title>
</head>
<body>
    <h1>Tankkostenrechner</h1>
    <form method="post">
        <label for="liter">Liter:</label>
        <input type="text" name="liter" id="liter" required>
        <br>
        <label for="preisProLiter">Preis pro Liter (in Euro):</label>
        <input type="text" name="preisProLiter" id="preisProLiter" required>
        <br>
        <input type="submit" value="Berechnen">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Eingabe aus Formular verarbeiten
        $liter = floatval($_POST["liter"]);
        $preisProLiter = floatval($_POST["preisProLiter"]);

        // Sicherstellen, dass die Eingabe gültige Zahlen sind
        if (!is_numeric($liter) || !is_numeric($preisProLiter)) {
            echo "<p>Bitte geben Sie gültige Zahlen ein.</p>";
        } else {
            // Berechnung der Tankkosten
            $tankkosten = $liter * $preisProLiter;

            // Ergebnis ausgeben
            echo "<p>Die Tankkosten für $liter Liter bei einem Preis von $preisProLiter Euro pro Liter betragen: $tankkosten Euro</p>";
        }
    }
    ?>
</body>
</html>
