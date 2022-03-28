<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="apple-touch-icon" sizes="76x76" href="../rezyume_web/assets/img/icon.png">
    	<link rel="icon" type="image/png" href="../rezyume_web/assets/img/icon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ryzume</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	</head>
	<body style="background-image: url(../rezyume_web/assets/img/blur.jpg">
		
		<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="#Home">Home</a></li>
				<li><a href="#Service">Service</a></li>
				<li><a href="#Contact Us">Contact Us</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1><a href="index.html">Ryzume</a></h1>
				<ul>
					<li><a href="#Home">Home</a></li>
					<li><a href="#Service">Service</a></li>
					<li><a href="#Contact Us">Contact Us</a></li>
					<li><a href="select_login.php">Login</a></li>
				</ul>

				<!-- menu mobile -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>
		
		<!-- bagian banner -->
		<section class="banner">
			<div class="container">
				<div class="banner-left">
					<h2>Hello!<br>
						Welcome To Ryzume <span class="efek-ngetik"></span></h2>
					<h2>Don't Worry About Expand Your Businnes Now</h2>
					<p>The service that will help you</p>
					<p>Young entrepreneurs in making it easier to Recap Sales Data<br></p>
					<a href="signup.php"><button style="background-color: white; color:green; border:none; border-radius: 5px; padding: 10px 15px;">Join For Free Now!</button></a>
				</div>
			</div>
		</section>

		<!-- bagian home -->
		<section id="Home">
			<div class="container">
				<h3>Home</h3>
				<p>Web ini digunakan untuk memudahkan pemilik usaha dan pegawai dalam merekap data penjualan setiap outlet yang ada.Jika merekap data penjualan dilakukan secara manual, hal ini akan sangat merepotkan.</p>
				<p>Dengan Rezyume Web ini pemilik usaha dan pegawai outlet dapat merekap data penjualan produk dimanapun dan kapanpun.</p>
			</div>
		</section>

		<!-- bagian service -->
		<section id="Service">
			<div class="container">
				<h3>Service</h3>
				<div class="col-4">
					<a href="">
						<img src="img/akun.png">
						<p style="padding: 10%;">Mengatur Outlet Sebagai Owner atau Employee</p>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="img/outlet.jpg">
						<p>Mengatur Outlet</p>
					</a>
				</div>

				<div class="col-4">
					<a href="">
						<img src="img/goods.jpg">
						<p style="padding: 10%;">Mengatur Produk Outlet</p>
					</a>
				</div>
			</div>
		</section>

		<!-- bagian contact us -->
		<section id="Contact Us">
			<div class="container">
				<h3>Contact Us</h3>
				<div class="col-3">
					<h4>Alamat</h4>
					<p>Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Selatan.
						, Kabupaten Banyumas, Jawa Tengah 53147</p>
				</div>

				<div class="col-3">
					<h4>Email</h4>
					<p>18102086@ittelkom-pwt.ac.id<br>
						18102264@ittelkom-pwt.ac.id<br>
						18102285@ittelkom-pwt.ac.id<br>
					</p>
				</div>

				<div class="col-3">
					<h4>Telpon</h4>
					<p>(0281) 641629</p>
				</div>	
			</div>
		</section>

		<footer>
			<div class="container">
				<small>Copyright by &copy; 2021 - Ryzume</small>
			</div>
		</footer>

		<script src="js/script.js"></script>
	</body>
</html>