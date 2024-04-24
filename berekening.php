<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inhoud Uitrekenen</title>
    <link rel="stylesheet" href="theme/style.css">
</head>
<body>
    <div class="square2">
        <div class="uitrekening">
            <center>
                <h1>Inhoud berekenen</h1>

                    <br><br><br><br><br><br><br><br><br><br>

                <?php
                $lengte = $_POST['lengte'];
                $breedte = $_POST['breedte'];
                $hoogte = $_POST['hoogte'];

                $inhoud = $lengte * $breedte * $hoogte;
                $liters = $inhoud / 1000;

                echo "<p> Het inhoud van het figuur is: $inhoud.</p> \n";
                echo "<p>En er kan ook: $liters liter in.</p>";
                ?>

                <form action="index.html">
                    <input type="submit" id="submit" value="Opnieuw iets berekenen">
                </form>
            </center>
        </div>
    </div>
</body>
</html>