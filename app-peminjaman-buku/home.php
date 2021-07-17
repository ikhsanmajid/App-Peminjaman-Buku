<!DOCTYPE html>
<head>
   <title>Aplikasi Peminjaman Buku</title>
   <link rel="stylesheet" href="css/style.css">
    
<?php 
	session_start();
   ?>

</head>
<body>
       <!--Navigasi Atas-->
   <nav>
      <ul>
         <li class="site">Aplikasi Peminjaman Buku</li>
         
         <li id="active" class="items"><a href="#">Home</a></li>
         <li class="items"><a href="buku.php">Buku</a></li>
         <li class="items"><a href="tantang.php">Tentang</a></li>
         <li class="items"><a href="formLogin.php">Login</a></li>
         <li class="items"><a href="#">Registrasi</a></li>
      </ul>
   </nav>
  
   <!--Isi-->
   <div class="content">
    <h2>HOME</h2>

    <p style="font-size: 30px; text-align: center;">Selamat Datang pada perpustakaan KELOMPOK 3 Pemrograman Web.</p>
<img src="images/udb.jpg" alt="UDB" style="margin-left: 160px; ">    
</div>

   <footer>
    © Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
</footer>

</body>
</html>