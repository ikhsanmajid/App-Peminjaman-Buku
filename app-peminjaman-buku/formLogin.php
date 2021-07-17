<!DOCTYPE html>
<html>
<head>
	<title>Login Aplikasi Peminjaman Buku</title>
	<link rel="stylesheet" type="text/css" href="css/formloginstyle.css">

</head>
<body>
	

  <!--Navigasi Atas-->
  <nav>
      <ul>
         <li class="site">Aplikasi Peminjaman Buku</li>
         
         <li class="items"><a href="#">Home</a></li>
         <li class="items"><a href="buku.php">Buku</a></li>
         <li class="items"><a href="tentang.php">Tentang</a></li>
         <li id="active" class="items"><a href="formLogin.php">Login</a></li>
         <li class="items"><a href="#">Registrasi</a></li>
      </ul>
   </nav>

<form name="data" method="post" action="cekLogin.php">
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='false'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>	

<div id="login">
		<h2> Login </h2>
		<div class="input-group">
			<input type="text" name="username" value="" required="required">
			<span>Username</span>
		</div>
		<div class="input-group">
			<input type="password" name="password" value="" required="required">
			<span>Password</span>
		</div>
		<div class="input-group">
			<input type="submit" value="Login" onClick="" >
		</div>
        
	</div>
</form>

<footer>
	© Copyright Kelompok 3 Pemrograman Web 2021. Universitas Duta Bangsa Surakarta.
</footer>

</body>
</html>