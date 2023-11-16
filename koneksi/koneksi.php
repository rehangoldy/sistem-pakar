<?php
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "spdempstershaferv1"; 

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "";
}
?>
