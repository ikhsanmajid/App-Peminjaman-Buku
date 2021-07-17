<!DOCTYPE html>
<head>
   <title>Aplikasi Peminjaman Buku</title>
   <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
   
<?php 
	session_start();
 	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:formLogin.php?pesan=gagal");
	}
 	?>

    <!--Navigasi Atas-->
   <nav>
      <ul>
         <li class="site">Aplikasi Peminjaman Buku</li>

         <li class="users"> Halo <b><?php echo $_SESSION['username']; ?>,</b> <b><?php echo $_SESSION['level']; ?></b> </li>
         <li class="items"><a href="anggota_home.php">Home</a></li>
         <li class="items"><a href="anggota_buku.php">Buku</a></li>
         <li class="items"><a href="anggota_riwayat.php">Riwayat</a></li>
         <li id="active" class="items"><a href="#">Tentang</a></li>
         <li class="items"><a href="logout.php">Logout</a></li>
      </ul>
   </nav>
  
   <!--Isi-->
   <div class="content">
    <h2>TENTANG</h2>
    <p style="font-size: 30px; text-align: justify;">
        Perpustakaan merupakan salah satu fasilitas yang disediakan oleh universitas sebagai pendukung dan penunjang proses kegiatan belajar mengajar bagi mahasiswa. Keberadaan sebuah perpustakaan sangat membantu untuk menambah atau meningkatkan pengetahuan dan wawasan bagi mahasiswa di kampus. Salah satu langkah yang diterapkan untuk meningkatkan fungsi dari perpustakaan itu sendiri adalah sistem pengolah data yang cepat dan tepat. Sistem informasi pengolahan data buku di perpustakaan yang dibutuhkan oleh universitas nantinya dapat digunakan untuk pencarian buku, pengolahan buku, penyimpanan buku, peminjaman buku, pengembalian buku, laporan data perpustakaan.
        </p> 
</div>


   <footer>
    © Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
</footer>

</body>
</html>