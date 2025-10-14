<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Footer -->
<style>
  * {
    box-sizing: border-box;
  }
  .footer-full {
    background: #0d0d0d;
    color: #ccc;
    padding: 60px 40px 20px;
    font-family: 'Poppins', sans-serif;
  }
  .footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
  }
  .footer-logo h2 {
    color: #fff;
    margin-bottom: 10px;
  }
  .footer-logo p {
    color: #999;
    line-height: 1.6;
  }
  .footer-links h3,
  .footer-social h3,
  .footer-contact h3 {
    color: #fff;
    margin-bottom: 15px;
    border-left: 4px solid #00bcd4;
    padding-left: 10px;
  }
  .footer-links ul {
    list-style: none;
    padding: 0;
  }
  .footer-links li {
    margin: 8px 0;
  }
  .footer-links a {
    color: #bbb;
    text-decoration: none;
    transition: 0.3s;
  }
  .footer-links a:hover {
    color: #00bcd4;
    margin-left: 5px;
  }
  .footer-contact p {
    margin: 8px 0;
  }
  .footer-social a {
    color: #bbb;
    font-size: 20px;
    margin-right: 15px;
    text-decoration: none;
    transition: 0.3s;
  }
  .footer-social a:hover {
    color: #00bcd4;
  }
  .footer-bottom {
    border-top: 1px solid #222;
    text-align: center;
    padding-top: 15px;
    color: #777;
    font-size: 14px;
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<footer class="footer-full">
  <div class="footer-container">
    <div class="footer-logo">
      <h2>👑 King Dev</h2>
      <p>
        Tempat berbagi inspirasi, artikel, dan tutorial seputar dunia IT, coding, dan teknologi masa kini.
        Bergabunglah untuk berkembang bersama komunitas tech Indonesia!
      </p>
    </div>

    <div class="footer-links">
      <h3>Navigasi</h3>
      <ul>
        <li><a href="#home">🏠 Home</a></li>
        <li><a href="#article">📰 Artikel</a></li>
        <li><a href="#about-us">👥 Tentang Kami</a></li>
      </ul>
    </div>

    <div class="footer-contact">
      <h3>Kontak</h3>
      <p><i class="fa-solid fa-envelope"></i> kingdev@gmail.com</p>
      <p><i class="fa-solid fa-phone"></i> +62 812-3456-7890</p>
      <p><i class="fa-solid fa-map-marker-alt"></i> Jakarta, Indonesia</p>
    </div>

    <div class="footer-social">
      <h3>Ikuti Kami</h3>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>

  <div class="footer-bottom">
    © 2025 King Dev | All Rights Reserved
  </div>
</footer>

    <script src="script.js"></script>
</body>
</html>