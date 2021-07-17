<?php 
$koneksi = mysqli_connect("localhost","root","","app-peminjaman-buku");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>