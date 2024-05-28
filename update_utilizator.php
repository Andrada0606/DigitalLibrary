<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Update Utilizatori</title>
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
                    <li><a href="imprumuturi.html">Imprumuturi</a></li>
                    <li><a href="rezervari.html">Rezervari</a></li>
                    <li><a href="utilizatori.html">Utilizatori</a></li>
                    <li><a href="admin_rapoarte.html"> Rapoarte</a></li>
                </ul>
            </div>
        </div>
        <?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "librarie";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_utilizator = $_POST['id_utilizator'];
    $email = $_POST['email']; // Preluăm noul email din formular

    // Verificăm dacă emailul este valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare("UPDATE utilizatori SET email = ? WHERE id = ?");
        $stmt->bind_param("si", $email, $id_utilizator);

        if ($stmt->execute()) {
            echo "Utilizatorul cu ID-ul " . $id_utilizator . " a fost actualizat cu succes.";
        } else {
            echo "Eroare la actualizarea utilizatorului: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Emailul nu este valid.";
    }
}

$conn->close();
?>
