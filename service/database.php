<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "cpo_db";


$db = mysqli_connect($hostname, $username, $password, $database);

if ($db->connect_error) {
    echo "Koneksi database gagal: " . $db->connect_error;
    die();
}
?>

