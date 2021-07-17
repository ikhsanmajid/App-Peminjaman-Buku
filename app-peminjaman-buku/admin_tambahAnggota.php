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
            <li class="dropdown"><a href="admin_tambahBuku.php">Buku</a></li>
        </ul>
         <ul>
            <li class="dropdown"><a class="active"  href="#">Anggota</a></li>
        </ul>
        <ul>
            <li class="dropdown"><a href="#">Admin</a></li>
        </ul>
        <a href="logout.php">Logout</a>
    </sidebar>

    <div class="content">
        <h2>Tambah Anggota</h2>
        <form name="data" method="post" action="">
            <table>
                <tr>
                    <td>ID Anggota  </td>
                    <td>:</td>
                    <td><input type="text" name="idAnggota"></td>
                </tr>
                <tr>
                    <td>Nama  </td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td >Jenis Kelamin  </td>
                    <td>:</td>
                    <td style="padding-left: 12px;">
                        <input type="radio" value="Laki-laki" name="kelamin">Laki-laki
                        <input type="radio" value="Perempuan" name="kelamin">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat  </td>
                    <td>:</td>
                    <td> <textarea name="alamat" id="" cols="30" rows="5"></textarea>
                </tr>
                <tr>
                    <td>No.HP  </td>
                    <td>:</td>
                    <td><input type="text" name="noHp"></td>
                </tr>
            </table>
            <input style="margin-top: 15px;" type="submit" value="Simpan" onclick="validasiTambahAnggota(this.data)">
            <input name="" type="reset">
        </form>
    </div>

    <footer>
        © Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
    </footer>
    <script>
        function validasiTambahAnggota(data){
            var idAnggota =(document.data.idAnggota.value);
            var nama =(document.data.nama.value);
            var kelamin =(document.data.kelamin.value);
            var alamat =(document.data.alamat.value);
            var noHp =(document.data.noHp.value);
            {
                if(document.data.idAnggota.value == false || document.data.nama.value == false || document.data.kelamin.value == false || alamat == document.data.alamat.value == false || document.data.noHp.value == false)
                {
                    alert ("Data yang di-isi harus Lengkap ! ");
                }else{
                    alert("Data Berhasil di Tambah");
                    alert ("ID Anggota : " + idAnggota + "\nNama : " + nama + "\nJenis Kelamin : " +kelamin+ "\nAlamat :" +alamat+ "\nNo.Hp :" +noHp);
                }
            }
        }
    </script>
</body>

</html>
