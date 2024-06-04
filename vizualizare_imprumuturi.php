
<?php
$db = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($db, "librarie");

$name = $email = "";
$start = 0;
$limit = 2;
$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $start = ($id - 1) * $limit;
}

$sqlv = "SELECT * FROM imprumuturi LIMIT $start, $limit";

$resultv = mysqli_query($db, $sqlv);
if (!$resultv) {
    die('Invalid query: ' . mysqli_error($db));
} else {
?>
<!DOCTYPE HTML>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Gestionare Utilizatori</title>
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
                <li><a href="admin.php">Imprumuturi</a></li>
                <li><a href="rezervari.html">Rezervari</a></li>
                <li><a href="utilizatori.html">Utilizatori</a></li>
                <li><a href="admin_rapoarte.html"> Rapoarte</a></li>
            </ul>
        </div>
    </div>

    <header>
    </header>

    <?php
    echo "<table class=\"unstriped\">";
    echo "<tr><thead><th width=\"200\"><b>Id</b></th><th width=\"150\"><b>Cod Tranzactie</b></th><th width=\"150\"><b>Carte Împrumutată</b></th><th width=\"150\"><b>Utilizator</b></th><th width=\"150\"><b>Data Împrumutului</b></th><th width=\"150\"><b>Data Scadenței</b></th><th width=\"150\"><b>Stare</b></th></thead></tr><tbody>";
    while ($myrow = mysqli_fetch_array($resultv, MYSQLI_ASSOC)) {
        echo "<tr><td>";
        echo $myrow["id"];
        echo "</td><td>";
        echo $myrow["cod_tranzactie"];
        echo "</td><td>";
        echo $myrow["carte_imprumutata"];
        echo "</td><td>";
        echo $myrow["utilizator"];
        echo "</td><td>";
        echo $myrow["data_imprumut"];
        echo "</td><td>";
        echo $myrow["data_scadenta"];
        echo "</td><td>";
        echo $myrow["stare"];
        echo "</td></tr>";
    }

    $rows = mysqli_num_rows(mysqli_query($db, "SELECT * FROM imprumuturi "));
    $total = ceil($rows / $limit);

    if ($id > 1) {
        echo "<a href='?id=" . ($id - 1) . "' class='button'>PREVIOUS </a>";
    }

    if ($id != $total) {
        echo "<a href='?id=" . ($id + 1) . "' class='button'> NEXT</a>";
    }

    echo "<ul class='page'>";
    for ($i = 1; $i <= $total; $i++) {
        if ($i == $id) {
            echo "<li class='current'>" . $i . "</li>";
        } else {
            echo "<li><a href='?id=" . $i . "'>" . $i . "</a></li>";
        }
    }
    echo "</ul>";

    ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
<?php
}
?>
