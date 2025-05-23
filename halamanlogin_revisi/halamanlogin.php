<?php
session_start(); // Penting!

include('../service/database.php');


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["username"] = $data["username"]; // <-- Tambahkan ini

        header("Location: /belajarphp.com/landingpage/landingpage.php");
    } else {
        echo "Login gagal! Username atau password salah.";
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

    <link rel="stylesheet" href="halamanlogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="/belajarphp.com/halamanlogin_revisi/halamanlogin.php" method="post">
            <h1>Masuk</h1>
            <h1>ini coba coba</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt' id="togglePassword" style="cursor: pointer;"></i>
            </div>

            <div class="lupa-password">
                <a href="">Lupa kata sandi?</a>
            </div>

            <button type="submit" name="login" class="btn">Masuk</button>

            <div class="register-link">
                <p>Tidak punya akun?<a href="/belajarphp.com/halamanregister_revisi/halamanregister.php"> Daftar</a></p>
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>