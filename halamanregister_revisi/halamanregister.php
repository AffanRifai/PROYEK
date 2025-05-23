<?php

session_start();

include('../service/database.php');

if (isset($_SESSION["is_login"])) {
    header("Location: /belajarphp.com/landingpage/landingpage.php");
}

$register_message = "";

if (isset($_POST["daftar"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    try {
        $sql = "INSERT INTO users (nama_lengkap, username, nomor_telepon, password) VALUES ('$fullname', '$username', '$phone', '$password')";

        if ($db->query($sql)) {
            echo "<script>alert('Berhasil mendaftar! Silakan login.'); window.location.href='/belajarphp.com/halamanlogin_revisi/halamanlogin.php';</script>";
        } else {
            echo "gagal";
        }
    }catch (mysqli_sql_exception) {
        echo "<script>alert('Username/nomer telepon sudah terdaftar! Silakan gunakan yang lain.');</script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman login</title>
    <link rel="stylesheet" href="boxicons.min.css">

    <link rel="stylesheet" href="halamanregister.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="/belajarphp.com/halamanregister_revisi/halamanregister.php" method="post">
            <h1>Daftar</h1>
            <i><?= $register_message ?></i>


            <div class="input-box">
                <input type="text" name="fullname" placeholder="Nama Lengkap" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="tel" name="phone" placeholder="Nomor Telepon" required>
                <i class='bx bxs-phone'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt' id="togglePassword" style="cursor: pointer;"></i>
            </div>

            <button type="submit" name="daftar" class="btn">Daftar</button>

            <div class="register-link">
                <p>Sudah punya akun? <a href="/belajarphp.com/halamanlogin_revisi/halamanlogin.php">Login</a></p>
            </div>
        </form>
    </div>

    <script src="script.js"></script>

</body>

</html>