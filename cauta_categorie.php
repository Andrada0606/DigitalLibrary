<!DOCTYPE HTML>  
<html>
<head>
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
                <li><a href="utilizator.html">Acasă</a></li>
                <li><a href="comenzi_utilizator.html">Comenziile mele</a></li>
                <li><a href="utilizator_feedback.html"> Feedback</a></li>
                <li><a href="lista_de_dorinte.html">Lista de dorinte </a></li>
            </ul>
        </div>
    </div>

<br>
<br>
<br>

<?php
// Conectare la baza de date
$db = mysqli_connect("127.0.0.1", "root", "", "librarie");

if (!$db) {
    die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $categorie = $_POST['categorie'];
  
        $sql = "SELECT * FROM elemente WHERE Categorie LIKE '%$categorie%'"; 
    
    
    $result = mysqli_query($db, $sql);
    
    
    if (mysqli_num_rows($result) > 0) {
        
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Titlu</th><th>Categorie</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Titlu"] . "</td>";
            echo "<td>" . $row["Categorie"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nu s-au găsit rezultate pentru categoria introdusă.";
    }
    
    
    mysqli_free_result($result);
}

mysqli_close($db);
?>
