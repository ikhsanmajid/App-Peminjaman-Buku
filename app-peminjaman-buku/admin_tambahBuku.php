<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Peminjaman Buku</title>
    <link rel="stylesheet" href="css/style_admin.css">
    <style>
        div.content h2 {
    background-color: rgb(55, 143, 106);
    color: white;
    text-align: center;
    font-size: 32px;
    padding: 10px;
}
div.content input[type="text"], textarea {
    width: 600px;
    margin: 10px;
    margin-left: 14px;
    padding: 10px;
}
    </style>
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
        <a href="admin_transaksi.php">Transaksi</a>
        <a class="active" href="admin_kelolaData.php">Kelola Data</a>
        <ul>
            <li class="dropdown"><a class="active" href="#">Buku</a></li>
        </ul>
         <ul>
            <li class="dropdown"><a href="admin_tambahAnggota.php">Anggota</a></li>
        </ul>
        <ul>
            <li class="dropdown"><a href="#">Admin</a></li>
        </ul>
        <a href="logout.php">Logout</a>
    </sidebar>

    <div class="content">
        <h2>Tambah Buku</h2>
        <form name="data" method="post" action="">
            <table>
                <tr>
                    <td>ID Buku  </td>
                    <td>:</td>
                    <td><input type="text" name="idBuku"></td>
                </tr>
                <tr>
                    <td>Judul  </td>
                    <td>:</td>
                    <td><input type="text" name="judul"></td>
                </tr>
                <tr>
                    <td>Penerbit  </td>
                    <td>:</td>
                    <td><input type="text" name="penerbit"></td>
                </tr>
                <tr>
                    <td>Pengarang  </td>
                    <td>:</td>
                    <td><input type="text" name="pengarang"></td>
                </tr>
                <tr>
                    <td>Tahun Terbit  </td>
                    <td>:</td>
                    <td><input type="text" name="tahunTerbit"></td>
                </tr>
            </table>
            <input style="margin-top: 15px;" type="submit" value="Simpan" onclick="validasiTambahBuku(this.data)">
            <input name="" type="reset">
        </form>
    </div>

    <footer>
        © Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
    </footer>
    <script>
       function validasiTambahBuku(data){
            var idBuku =(document.data.idBuku.value);
            var judul =(document.data.judul.value);
            var penerbit =(document.data.penerbit.value);
            var pengarang =(document.data.pengarang.value);
            var tahunTerbit =(document.data.tahunTerbit.value);
            {
                if(document.data.idBuku.value == false || document.data.judul.value == false || document.data.penerbit.value == false || document.data.pengarang.value == false || document.data.tahunTerbit.value == false)
                {
                    alert ("Data yang di-isi harus Lengkap ! ");
                }else{
                    alert("Data Berhasil di Tambah");
                    alert ("ID Buku : " + idBuku + "\nJudul : " + judul + "\nPenerbit : " +penerbit+ "\nPengarang :" +pengarang+ "\nTahun Terbit :" +tahunTerbit);
                }
            }
        }
    </script>
</body>

</html>
