<!DOCTYPE html>
<html>
<head>
	<title>Ekowisata Kabupaten Toba</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Ekowisata Kabupaten Toba</h1>
		<h3 class="deskripsi"></h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=link">LINK</a></li>
			<li><a href="index.php?page=kontak">KONTAK</a></li>
			<li><a href="index.php?page=galeri">GALERI</a></li>
			<li><a href="index.php?page=budaya">BUDAYA</a></li>
			<li><a href="index.php?page=wisata">WISATA</a></li>
			<li><a href="index.php?page=home">HOME</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'link':
				include "halaman/link.php";
				break;
			case 'kontak':
				include "halaman/kontak.php";
				break;
			case 'galeri':
				include "halaman/galeri.php";
				break;
			case 'budaya':
				include "halaman/budaya.php";
				break;
			case 'wisata':
				include "halaman/wisata.php";
				break;
			case 'home':
				include "halaman/home.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>