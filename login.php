<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "librarie";

$data = mysqli_connect($host, $user, $password, $database);
if ($data === false) {
    die("Connection error");
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($data, $sql);

    if (!$result) {
        die("Query failed");
    }

    $row = mysqli_fetch_array($result);

    if ($row) {
        $usertype = $row["usertype"];
        if ($usertype == "utilizator") {
            header("Location: utilizator.php");
            exit();
        } elseif ($usertype == "admin") {
            header("Location: admin.php");
            exit();
        } elseif ($usertype == "bibliotecar") {
            header("Location: bibliotecar.php");
            exit();
        }
    } else {
        echo "Nume de utilizator sau parolă greșită";
    }
}

?>
