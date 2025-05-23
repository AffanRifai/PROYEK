<?php

session_start();

if (isset($_POST['logout'])) {
  session_unset(); // Menghapus semua variabel session
  session_destroy();
  header("Location: /belajarphp.com/landingpage/landingpage.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CPO SPORT</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="landingpage.css" />
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>
  <div class="container">
    <nav class="navbar">
      <img class="logo-cpo" src="/landingpage/logo-cpo.png" alt="">
      <button id="menu-button" class="menu-button">☰</button>
      <div class="navbar-right">
        <ul class="navbar-menu">
          <li class="menu-item"><a href="landingpage.html">Beranda</a></li>
          <li class="menu-item"><a href="">booking</a></li>
          <li class="menu-item"><a href="">Pemesanan</a></li>
          <li class="menu-item"><a href="/penjadwalan/jadwal.html">Jadwal</a></li>
        </ul>
      </div>



      <?php if (isset($_SESSION["username"])): ?>
        <!-- Jika sudah login, tampilkan tombol profile -->
        <img src="/belajarphp.com/landingpage/icon.jpeg" class="profile-pic" onclick="toggleMenu()">
        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="icon.jpeg" alt="User Icon">
              <h3><?= htmlspecialchars($_SESSION["username"]); ?></h3>
            </div>
            <hr>

            <form action="#" class="sub-menu-link" method="POST">
              <img src="setting.png">
              <button class="logout-btn" type="submit" name="logout">Edit Profile</button>
              <span>></span>
            </form>

            <form action="/belajarphp.com/landingpage/landingpage.php" class="sub-menu-link" method="POST">
              <img src="logout.png">
              <button class="logout-btn" type="submit" name="logout">Logout</button>
              <span>></span>
            </form>

          </div>
        </div>
      <?php else: ?>
        <!-- Jika belum login -->
        <a href="/belajarphp.com/halamanlogin_revisi/halamanlogin.php">
          <button type="submit" class="login-btn">Login</button>
        </a>
      <?php endif; ?>


    </nav>
    <div id="sidebar" class="sidebar">
      <button id="close-button" class="close-button">&times;</button>
      <h2 class="sidebar-title">Menu</h2>
      <ul class="sidebar-menu">
        <li class="menu-item"><a href="landingpage.html">Beranda</a></li>
        <li class="menu-item"><a href="#">Booking</a></li>
        <li class="menu-item"><a href="#">Pemesanan</a></li>
        <li class="menu-item"><a href="/penjadwalan/jadwal.html">Jadwal</a></li>
      </ul>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay"></div>
  </div>



  <div class="fotohomepage">
    <img src="/belajarphp.com/landingpage/fotohomepage.png" class="foto-container" />
  </div>

  <div class="lapangan">
    <h1>Lapangan yang tersedia</h1>
  </div>
  <div class="card-container">
    <div class="card">
      <img src="/landingpage/images/lapanganBadminton.jpeg" alt="Lapangan 1" class="card-image">
      <div class="card-content">
        <div class="card-header">
          <h3 class="card-title">Lapangan 1</h3>
        </div>
        <div class="card-status">
          <p>Fasilitas</p>
          <span class="status">WC</span>
          <span class="status">Cafe</span>
          <span class="status">Sofa</span>
          <span class="status">Parkiran</span>
          <span class="status">Raket(sewa)</span>
          <span class="status">Tempat duduk untuk penonton</span>
        </div>
        <a href="/halaman_booking/halamanbooking.html"><button class="booking-button">Booking sekarang</button></a>
      </div>
    </div>
    <div class="card">
      <img src="/landingpage/images/lapanganBadminton.jpeg" alt="Lapangan 2" class="card-image">
      <div class="card-content">
        <div class="card-header">
          <h3 class="card-title">Lapangan 2</h3>
        </div>
        <div class="card-status">
          <p>Fasilitas</p>
          <span class="status">WC</span>
          <span class="status">Cafe</span>
          <span class="status">Sofa</span>
          <span class="status">Parkiran</span>
          <span class="status">Raket(sewa)</span>
          <span class="status">Tempat duduk untuk penonton</span>
        </div>

        <a href="/halaman_booking/halamanbooking.html"><button class="booking-button">Booking sekarang</button></a>
      </div>
    </div>
  </div>


  <!-- fasilitas -->
  <div class="fasilitas-teks">
    <h1>Fasilitas yang kami sediakan</h1>
  </div>

  <div class="slider">
    <div class="list">
      <div class="item">
        <img src="/landingpage/images/fasilitas1_lapangan.jpeg" alt="">
        <div class="info">
          <h2>Lapangan standar internasional</h2>
        </div>
      </div>

      <div class="item">
        <img src="/landingpage/images/fasilitas1_lapangan.jpeg" alt="">
        <div class="info">
          <h2>Lapangan standar internasional</h2>
        </div>
      </div>

      <div class="item">
        <img src="/landingpage/images/fasilitas1_lapangan.jpeg" alt="">
        <div class="info">
          <h2>Lapangan standar internasional</h2>
        </div>
      </div>

      <div class="item">
        <img src="/landingpage/images/fasilitas1_lapangan.jpeg" alt="">
        <div class="info">
          <h2>Lapangan standar internasional</h2>
        </div>
      </div>

      <div class="item">
        <img src="/landingpage/images/fasilitas1_lapangan.jpeg" alt="">
        <div class="info">
          <h2>Lapangan standar internasional</h2>
        </div>
      </div>
    </div>

    <!-- button prev dan next -->
    <div class="buttons">
      <button id="prev">
        << /button>
          <button id="next">></button>
    </div>

    <!-- titik -->
    <ul class="dots">
      <li class="active"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

  </div>

  <!-- fitur comments -->
  <div id="comment-section">
    <h2>Ulasan</h2>
    <div id="comments-list">
    </div>

    <div id="comment-form">
      <h3>Berikan ulasan anda</h3>
      <form id="commentForm">
        <textarea id="commentText" placeholder="Ketik ulasan anda..." required></textarea>
        <button class="comment-btn" type="submit">Kirim ulasan</button>
      </form>
    </div>
  </div>


  <footer>
    <div class="footer">
      <div class="footer-container">
        <div class="row">
          <div class="footer-col">
            <h3>CPO SPORT</h3>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">services</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h3>WhatsApp</h3>
            <div class="social-links">
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
          <div class="footer-col">
            <h3>Media social</h3>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/cposportscafe/"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
          </div>
          <div class="footer-col">
            <h3>LOKASI CPO</h3>
            <ul>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7279.884218054315!2d108.301801!3d-6.366406!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb97c4aa0c2d7%3A0x40559ddd0a4514aa!2sCPO%20SPORT%20BADMINTON!5e1!3m2!1sid!2sid!4v1739893379402!5m2!1sid!2sid" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
          </div>
        </div>
        <br>
        <hr>
        <div class="footer-col">
          <p>Hak cipta <a href="@">@</a> 2025</p>
        </div>
      </div>
  </footer>
  <script src="landingpage.js"></script>
</body>

</html>