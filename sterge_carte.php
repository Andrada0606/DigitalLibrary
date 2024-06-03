<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de dorințe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.7.3/css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><h1 style="margin: 0;"><a href="#">DigitalLibrary</a></h1></li>
        </ul>
    </div>
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="utilizator.html">Acasă</a></li>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="Despre.html">Despre</a></li>
        </ul>
    </div>
</div>
   <div class="top-bar-right" style="float: right;">
    <a class="button success" href="index.html">Logout</a>

</div>

<div style="clear: both;"></div>
</div>

    <div class="top-bar">
        <div class="top-bar-right" style="display: block; margin-left: auto; margin-right: auto;">
            <ul class="menu">
                <li><a href="bibliotecar.php">Gestionare carti</a></li>
                <li><a href="organizare_evenimente.html">Organizare evenimente</a></li>
            </ul>
        </div>
    </div>
    <br><br>

<?php
// Verificăm dacă a fost trimis ID-ul cărții de șters
if(isset($_POST['id'])) {
    // Conectarea la baza de date sau gestionarea erorii în cazul în care nu se poate conecta
    $db = mysqli_connect("127.0.0.1", "root", "", "librarie");
    if (!$db) {
        die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
    }

   
    $carte_id = mysqli_real_escape_string($db, $_POST['id']);

$sql = "DELETE FROM ebib_carte WHERE id = '$carte_id'";


    if (mysqli_query($db, $sql)) {
        echo "Cartea a fost ștearsă cu succes.";
    } else {
        echo "Eroare la ștergerea cărții: " . mysqli_error($db);
    }

    // Închidem conexiunea la baza de date
    mysqli_close($db);
} else {
    // Afișăm un mesaj de eroare dacă nu s-a primit ID-ul cărții
    echo "ID-ul cărții nu a fost primit.";
}
?>
