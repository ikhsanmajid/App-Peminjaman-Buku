<!DOCTYPE html>
<html>

<head>
       <title>Aplikasi Peminjaman Buku</title>
   <link rel="stylesheet" type="text/css" href="css/style_admin.css">
</head>

<body>

<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:formLogin.php?pesan=gagal");
	}
	?>

    <header>
        <p>APLIKASI PEMINJAMAN BUKU</p>
                    <aside class="menu">
                    <div class="menu-content">
                    Halo <b><?php echo $_SESSION['username']; ?>,</b> <b><?php echo $_SESSION['level']; ?></b>
                   </div>
                  </aside>
        </header>

    <sidebar>
        <a class="active" href="#">Dashboard</a>
        <a href="admin_transaksi.php">Transaksi</a>
        <a href="admin_kelolaData.php">Kelola Data</a>
        <a href="logout.php">Logout</a>        
    </sidebar>

    <div class="content">
        <h2>Selamat Datang pada perpustakaan KELOMPOK 3 Pemrograman Web.</h2>
        <img src="images/udb.jpg" alt="UDB" style="margin-left: 160px; ">
    </div>

    <footer>
        © Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
    </footer>

</body>

</html>
