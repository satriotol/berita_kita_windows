<?php
require 'admin/function.php';
$id = $_GET["id"];
$index= query("SELECT*FROM berita WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<header>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/barulihatberita.css" rel="stylesheet">
		<!-- Javascript for custom animation -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="js/animate.js"></script>
	</head>

	<nav class="navbar navbar-default navbar-fixed-top"
		style="background-color: #1295C9; background-blend-mode: color; border: none">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="index.php"><img src="images/HIMPRO-logo.png"
						alt="Himprotekkim" height="60px"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="nav-link" style="color: white" href="index.php">Home</a>
					</li>
					<li>
						<a class="nav-link" style="color: white" href="menu_article.php">Article</a>
					</li>
					<li>
						<a class="nav-link" style="color: white" href="menu_chemengfair.php">Chemengfair</a>
					</li>
					<li>
						<a class="nav-link" style="color: white" href="isi_data_alumni.php" target="_blank">Alumni</a>
					</li>
					<li class="dropdown">
						<a class="nav-link" style="color: white" href="aboutus.php">About</a>
						<div class="dropdown-content" style="background-color: #1295C9">
							<a class="nav-link" style="color: white" href="aboutus.php">Kabinet</a>
							<a class="nav-link" style="color: white" href="menu_departemen.php">Departemen</a>
							<a class="nav-link" style="color: white" href="http://tekkim.unnes.ac.id"
								target="_blank">Jurusan</a>
							<a class="nav-link" style="color: white" href="index.php#contact-us">Kontak</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<script>
		$(".nav-link").each(function () {
			if ((window.location.pathname.indexOf($(this).attr('href'))) > -1) {
				$(this).addClass('activeMenuItem');
			}
		});
		$(document).ready(function () {

		});
	</script>
</header>
<body id="page-top">
	<div class="post-container-wrapper">
		<section class="post-container">
			<article class="post-wrapper">
				<div class="post-image">
					<img src="upload/<?=$index["gambar"];?>" height="100%">
				</div><br>
				<h3 class="post-title">
					<a href="lihat_berita.php?id=<?=$index["id"];?>"><?=$index["judul"];?></a>
				</h3>
				<div class="post-date">
					<p><?=$index["tanggal_berita"];?></p>
				</div>
				<div>
					<p class="post-message">
						<?= $index["isi"];?>
					</p>
				</div>
	</div>
	<footer class="footer-container-wrapper">
		<div class="footer-container">
			<div class="footer-address">
				<p>Gd. PKM FT-Universitas Negeri Semarang, Sekaran, GunungPati</p>
				<p>himatekkimunnes@gmail.com</p>
			</div>
			<div class="footer-socmed-copyright">
				<div class="footer-socmed-container">
					<p class="footer-socmed-title">Social Media Kami</p>
					<div class="footer-socmed">
						<a class="fa fa-facebook" href=""></a>
						<a class="fa fa-instagram" href=""></a>
						<a class="fa fa-twitter" href=""></a>
						<a class="fa fa-youtube" href=""></a>
					</div>
				</div>
			</div>
			<p class="copyright-title">MADE BY <a target="_blank"
					href="instagram.com/profile/krotidesian.id">KROTIDESIAN</a></p>
		</div>
	</footer>
	</section>
	<p id="back-top">
		<a href="#top"><i class="fa fa-angle-up"></i></a>
	</p>


	<!-- Bootstrap core JavaScript
			================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/theme-scripts.js"></script>
</body>

</html>