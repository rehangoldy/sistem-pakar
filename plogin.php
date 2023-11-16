<?php
include "koneksi/koneksi.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$error = "Periksa kembali username dan password anda";

$login = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['tingkat'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['tingkat'] = "admin";
        header('location:admin/dokter.php');
    } elseif ($data['tingkat'] == "dokter") {
        $_SESSION['username'] = $username;
        $_SESSION['tingkat'] = "dokter";
        header('location:dokter/pasien.php'); 
    } else {
        $_SESSION["error"] = $error;
        header("location: login.php");
    }
} else {
    $_SESSION["error"] = $error;
    header("location: login.php");
}

mysqli_close($koneksi); // Menutup koneksi setelah pengguna diarahkan
?>
