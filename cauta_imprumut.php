<!DOCTYPE HTML>  
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body> 

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><h1 style="margin: 0;"><a href="#">DigitalLibrary</a></h1></li>
        </ul>
    </div>
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="acasa.html">Acasă</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="Despre.html">Despre</a></li>
        </ul>
    </div>
</div>

<div class="top-bar" style="background-color: white;">
    <div class="top-bar-right" style="float: right;">
        <a class="button success" href="index.html">Logout</a>
    </div>
    <div style="clear: both;"></div>
</div>

<div class="top-bar">
    <div class="top-bar-right" style="display: block; margin-left: auto; margin-right: auto;">
        <ul class="menu">
            <li><a href="imprumuturi.html">Imprumuturi</a></li>
            <li><a href="rezervari.html">Rezervari</a></li>
            <li><a href="utilizatori.html">Utilizatori</a></li>
            <li><a href="admin_rapoarte.html"> Rapoarte</a></li>
        </ul>
    </div>
</div>

<br>
<br>
<br>

<?php
$db = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($db, "librarie");

if (empty($_POST["cod_tranzactie"])) {
    $errorMessage = "Este necesar să introduceți codul de tranzacție.";
    echo $errorMessage;
} else {
    $transactionCode = $_POST["cod_tranzactie"];
    $sql = "SELECT * FROM imprumuturi WHERE cod_tranzactie='$transactionCode'";
    $result = mysqli_query($db, $sql);

    if (!$result) {
        die('Invalid query: ' . mysqli_error($db));
    }

    $nr = $result->num_rows;

    if ($nr > 0) {
        echo "<table class=\"unstriped\">";
        echo "<tr><thead><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Cod Tranzactie</b></th><th width=\"150\"><b>Carte Împrumutată</b></th><th width=\"150\"><b>Utilizator</b></th><th width=\"150\"><b>Data Împrumutului</b></th><th width=\"150\"><b>Data Scadenței</b></th><th width=\"150\"><b>Stare</b></th></thead></tr><tbody>";
        while ($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr><td>";
            echo $myrow["id"];
            echo "</td><td>";
            echo $myrow["cod_tranzactie"]; // Corectată cheia pentru codul tranzacției
            echo "</td><td>";
            echo $myrow["carte_imprumutata"]; // Utilizată corect cheia pentru numele cărții
            echo "</td><td>";
            echo $myrow["utilizator"]; // Utilizată corect cheia pentru numele utilizatorului
            echo "</td><td>";
            echo $myrow["data_imprumut"];
            echo "</td><td>";
            echo $myrow["data_scadenta"];
            echo "</td><td>";
            echo $myrow["stare"];
            echo "</td></tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "</br>Nu s-a găsit nicio înregistrare care să corespundă căutării!";
    }
}
?>

<br>
<a href="imprumuturi.html" class="button">Inapoi</a>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
