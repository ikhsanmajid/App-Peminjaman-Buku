<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Peminjaman Buku</title>
    <link rel="stylesheet" href="css/style_admin.css">
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
        <a href="admin_home.php">Dashboard</a>
        <a class="active" href="admin_transaksi.php">Transaksi</a>
        <ul>
            <li class="dropdown"><a href="#">Peminjaman</a></li>
        </ul>
         <ul>
            <li class="dropdown"><a href="#">Pengembalian</a></li>
        </ul>
        <a href="admin_kelolaData.php">Kelola Data</a>
        <a href="logout.php">Logout</a>
    </sidebar>

    <div class="content">
        <h2>Peminjaman & Pengembalian Buku</h2>
        <p>INI HALAMAN TRAKSAKSI BUKU</p>
        </div>

    <footer>
        © Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
    </footer>

    
</body>

</html>
