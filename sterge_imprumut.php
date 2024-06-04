<?php
session_start();

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "librarie";

// Conectare la baza de date
$data = mysqli_connect($host, $user, $password, $database);
if ($data === false) {
    die("Eroare la conectarea la baza de date");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM imprumuturi WHERE id = ?";
        $stmt = $data->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Împrumutul a fost șters cu succes!";
            header("Location: admin.php");
            exit();
        } else {
            echo "Eroare la ștergerea împrumutului: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "ID-ul împrumutului lipsă.";
    }
} else {
    echo "Metodă de cerere invalidă.";
}

// Închidere conexiune la baza de date
$data->close();
?>
