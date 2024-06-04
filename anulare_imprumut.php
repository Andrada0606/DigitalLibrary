<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <style>
      
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
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
                <li><a href="index.html">Acasă</a></li>
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
                <li><a href="admin.php">Imprumuturi</a></li>
                <li><a href="rezervari.html">Rezervari</a></li>
                <li><a href="utilizatori.html">Utilizatori</a></li>
                <li><a href="admin_rapoarte.html"> Rapoarte</a></li>
            </ul>
        </div>
    </div>
</body>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (isset($_POST['cod_tranzactie'])) {
     
        $cod_tranzactie = $_POST['cod_tranzactie'];

        if (!empty($cod_tranzactie)) {
        
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "librarie";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexiunea a eșuat: " . $conn->connect_error);
            }

            $sql = "DELETE FROM imprumuturi WHERE cod_tranzactie = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $cod_tranzactie);

            if ($stmt->execute()) {
                if ($stmt->affected_rows > 0) {
                    echo "Împrumutul a fost anulat cu succes!";
                } else {
                    echo "Nu s-a găsit niciun împrumut cu codul de tranzacție specificat.";
                }
            } else {
                echo "Eroare la anularea împrumutului: " . $stmt->error;
            }

            // Închide conexiunea
            $stmt->close();
            $conn->close();
        } else {
            echo "Te rog completează codul tranzacției.";
        }
    } else {
        echo "Te rog completează codul tranzacției.";
    }
} else {
    echo "Formularul nu a fost trimis corect.";
}
?>
