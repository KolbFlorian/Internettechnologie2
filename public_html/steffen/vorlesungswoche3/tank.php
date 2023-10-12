<!DOCTYPE html>
<html>
<head>
    <title>Tankkostenrechner</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Tankkostenrechner</h1>
    <form action="tankergebnis.php" method="post">
        <select name="kraftstoff">
            <option value="Benzin">Benzin</option>
            <option value="Diesel">Diesel</option>
        </select>
        <p><input name="liter" type="number" step="0.01" placeholder="Liter"></p>
        <p><input name="preisProLiter" type="number" step="0.01" placeholder="Preis pro Liter (in Euro)"></p>
        <input type="submit" value="Berechnen">
    </form>
</body>
</html>