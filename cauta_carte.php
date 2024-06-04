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
<body> 

</br>
</br>
</br>
<?php
// Conectare la baza de date
$db = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($db, "librarie");
$SW = 0;

// Verificăm dacă există date trimise prin POST
if ((!empty($_POST["titlu"])) || (!empty($_POST["autor"]))) {
    $titlu = $_POST["titlu"] ?? '';
    $autor = $_POST["autor"] ?? '';
    
    // Construim interogarea SQL în funcție de datele primite prin POST
    if (!empty($titlu) && empty($autor)) {
        $sql = "SELECT * FROM ebib_carte WHERE titlu='$titlu'";
        $SW = 1;
    } elseif (empty($titlu) && !empty($autor)) {
        $sql = "SELECT * FROM ebib_carte WHERE autor='$autor'";
        $SW = 1;
    } elseif (!empty($titlu) && !empty($autor)) {
        $sql = "SELECT * FROM ebib_carte WHERE titlu='$titlu' AND autor='$autor'";
        $SW = 1;
    }

    // Verificăm dacă s-a construit o interogare SQL
    if ($SW == 1) {
        $result = mysqli_query($db, $sql);
        $nr = $result->num_rows;

        if (!$result) {
            die('Invalid query: ' . mysqli_error($db));
        }

        // Verificăm dacă s-au găsit rezultate
        if ($nr > 0) {
            echo "<table class=\"unstriped\">";
            echo "<thead><tr><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Titlu</b></th><th width=\"150\"><b>Autor</b></th></tr></thead><tbody>";
            while ($myrow = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr><td>";
                echo $myrow["id"];
                echo "</td><td>";
                echo $myrow["titlu"];
                echo "</td><td>";
                echo $myrow["autor"];
                echo "</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "</br>Nu s-a găsit nicio înregistrare care să corespundă căutării!";
        }
    }
}
?>
</br>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
