<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inhoud Uitrekenen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="uitrekening">
        <center>
            <h1>inhoud berekenen</h1>

            <?php
            $lengte = $_POST['lengte'];
            $breedte = $_POST['breedte'];
            $hoogte = $_POST['hoogte'];

            $inhoud = $lengte * $breedte * $hoogte;
            $liters = $inhoud / 1000;

            echo "<p> Het inhoud van het figuur is: $inhoud.</p> \n";
            echo "<p>En er kan ook: $liters liter in.</p>";
            ?>
            <br>
                <form action="index.html">
                    <input type="submit" value="Opnieuw iets berekenen">
                </form>
        </center>
    </div>
</body>
</html>