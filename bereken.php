<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berekening</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Berekenen van een ruimtelijke figuur</h1>

        <?php
        // Lees de ingevoerde waarden uit het formulier
        $lengte = $_POST['lengte'];
        $breedte = $_POST['breedte'];
        $hoogte = $_POST['hoogte'];

        // Bereken de inhoud van de ruimtelijke figuur (bijvoorbeeld, rechthoekige doos)
        $inhoud = $lengte * $breedte * $hoogte;
        $liter = $inhoud / 1000;
        // Toon het resultaat
        echo "<p>Inhoud van de ruimtelijke figuur: " . $inhoud . " cm³</p> \n";
        echo "<p>Dit is: " . $liter . " Liter </p>"; 
        ?>
    <br>
    <form action="index.html">
        <input type="submit" value="Opnieuw iets berekenen">
    </form>

    </div>
</body>
</html>
