<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
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
                <li><a href="gestionare_carti.html">Gestionare carti</a></li>
                <li><a href="organizare_evenimente.html">Organizare evenimente</a></li>
            </ul>
        </div>
    </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['titlu']) && isset($_POST['an']) && isset($_POST['autor'])) {
        $conn = new mysqli('127.0.0.1', 'root', '', 'librarie');

        if ($conn->connect_error) {
            die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
        }

        $titlu = mysqli_real_escape_string($conn, $_POST['titlu']);
        $an = mysqli_real_escape_string($conn, $_POST['an']);
        $autor = mysqli_real_escape_string($conn, $_POST['autor']);

        $sql = "INSERT INTO ebib_carte (titlu, an, autor) VALUES ('$titlu', '$an', '$autor')";

        if ($conn->query($sql) === TRUE) {
            echo "Cartea a fost adăugată cu succes!";
        } else {
            echo "Eroare la adăugarea cărții: " . $conn->error;
        }

        // Închidem conexiunea la baza de date
        $conn->close();
    } else {
        echo "Toate câmpurile trebuie completate!";
    }
}
?>
