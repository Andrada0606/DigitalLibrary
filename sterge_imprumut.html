<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
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
                    <li><a href="admin.php">Imprumuturi</a></li>
                    <li><a href="rezervari.html">Rezervari</a></li>
                    <li><a href="utilizatori.html">Utilizatori</a></li>
                    <li><a href="admin_rapoarte.html"> Rapoarte</a></li>
                </ul>
            </div>
        </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rezervare_id = $_POST['rezervare_id'];

    // Conectare la baza de date
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "librarie";

    // Creare conexiune
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificare conexiune
    if ($conn->connect_error) {
        die("Conexiunea a eșuat: " . $conn->connect_error);
    }

    // Ștergere rezervare
    $sql = "DELETE FROM rezervari WHERE rezervare_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $rezervare_id);

    if ($stmt->execute() === TRUE) {
        echo "Rezervarea a fost ștearsă cu succes.";
    } else {
        echo "Eroare la ștergerea rezervării: " . $conn->error;
    }

    // Închidere conexiune
    $stmt->close();
    $conn->close();
}
?>
