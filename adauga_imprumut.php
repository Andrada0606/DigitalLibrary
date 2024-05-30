<?php
session_start();

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "librarie";


$data = mysqli_connect($host, $user, $password, $database);
if ($data === false) {
    die("Connection error");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $cod_tranzactie = $_POST['cod_tranzactie'];
    $carte_imprumutata = $_POST['carte_imprumutata'];
    $utilizator = $_POST['utilizator'];
    $data_imprumut = $_POST['data_imprumut'];
    $data_scadenta = $_POST['data_scadenta'];
    $stare = $_POST['stare'];

    
    $sql = "INSERT INTO imprumuturi (cod_tranzactie, carte_imprumutata, utilizator, data_imprumut, data_scadenta, stare) 
            VALUES (?, ?, ?, ?, ?, ?)";

    
    $stmt = mysqli_prepare($data, $sql);
    if ($stmt === false) {
        die("Error in preparing the statement: " . mysqli_error($data));
    }

   
    mysqli_stmt_bind_param($stmt, "ssssss", $cod_tranzactie, $carte_imprumutata, $utilizator, $data_imprumut, $data_scadenta, $stare);

   
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Împrumutul a fost adăugat cu succes!";
        header("Location: admin.php");
        exit();
    } else {
        echo "Eroare la adăugarea împrumutului: " . mysqli_error($data);
    }

//inchide
    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request method.";
}
?>
