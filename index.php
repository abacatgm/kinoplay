<?php
	require 'reglog/config.php';
	session_start();
	if(!empty($_SESSION["id"])){
		$id = $_SESSION["id"];
		$result = mysqli_query($conn, "SELECT * FROM cliente WHERE id = $id");
		$row = mysqli_fetch_assoc($result);
	}else{
		header("Location: reglog/login-cadastro.php");
	}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/website-logo/logo.png">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/index-main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	<title>Kinoplay</title>
	<style>
		#inicio {
			color: #a600d8;
		}
	</style>
</head>

<body>
	<header>
		<nav class="navbar">
			<div class="logo">
				<a href="#">
					<img class="imglogo" src="img/website-logo/logo.png" height="50px" alt="logo">
				</a>
				<a class="name">KINO<span>play</span></a>
			</div>
			<div class="nav-links responsive">
				<li><a href="index.php" id="inicio">Inicio</a></li>
				<li><a href="filmes.php" id="films">Filmes</a></li>
				<li><a href="series.php" id="series">Séries</a></li>
				<li><a href="minhalista.php" id="minhaLista">Minha lista</a></li>
				<li><a href="reglog/logout.php" id="button1">Sair</a></li>
			</div>
			<div class="hamburger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</div>
		</nav>
		<section>
			<div class="box">
				<form method="POST" name="pesquisar" action="pesquisar.php">
					<input type="text" class="input" name="pesquisar">
				</form>
				<div class="btn" onclick="document.search.txt.value = ''">
					<span class="closeBtn"></span>
					<span class="closeBtn"></span>
				</div>
			</div>
			<i class="ri-map-pin-user-line"></i>
		</section>
	</header>
	<main>
		<section class="menu swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide container">
					<img src="img/banner-destaque/venom.jpg" alt="Venom">
					<div class="menu-home">
						<img src="img/destaque-logo/venom.png" alt="Título" id="venom">
						<div class="info">
							<a href="filmetemplate.php?id=51">
								<i class="ri-information-fill"></i> <span>Saiba mais</span>
							</a>
						</div>
						<a href="#" class="play">
							<i class="ri-play-fill"></i>
						</a>
					</div>
				</div>
				<div class="swiper-slide container">
					<img src="img/banner-destaque/avengers.jpg" alt="Vingadores Ultimato">
					<div class="menu-home">
						<img id="vingadores" src="img/destaque-logo/avengers.png" alt="vingadores Endgame">
						<div class="info">
							<a href="filmetemplate.php?id=52">
								<i class="ri-information-fill"></i> <span>Saiba mais</span>
							</a>
						</div>
						<a href="#" class="play">
							<i class="ri-play-fill"></i>
						</a>
					</div>
				</div>
				<div class="swiper-slide container">
					<img src="img/banner-destaque/avatar2.jpg" alt="Avatar">
					<div class="menu-home">
						<img src="img/destaque-logo/avatar2.png" alt="Título" id="avatar">
						<div class="info">
							<a href="filmetemplate.php?id=53">
								<i class="ri-information-fill"></i> <span>Saiba mais</span>
							</a>
						</div>
						<a href="#" class="play">
							<i class="ri-play-fill"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</section>
		<section class="catalogos">
			<div class="main-scroll-emalta">
				<div class="tituloCatalogo">
					<h2>Recomendado para você</h2>
					<div class="cover1">
						<button class="icon1" data-target="list1" onclick="scroll_left(this)"><i class="ri-arrow-left-s-line"></i></button>
						<button class="icon2" data-target="list1" onclick="scroll_right(this)"><i class="ri-arrow-right-s-line"></i></button>
						<div class="scroll-images" id="list1">
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=1"><img class="child-img" filmeid="1"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=2"><img class="child-img" filmeid="2"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=3"><img class="child-img" filmeid="3"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=4"><img class="child-img" filmeid="4"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=5"><img class="child-img" filmeid="5"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=6"><img class="child-img" filmeid="6"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=7"><img class="child-img" filmeid="7"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=8"><img class="child-img" filmeid="8"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=9"><img class="child-img" filmeid="9"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=10"><img class="child-img" filmeid="10"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=11"><img class="child-img" filmeid="11"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=12"><img class="child-img" filmeid="12"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=13"><img class="child-img" filmeid="13"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=14"><img class="child-img" filmeid="14"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=15"><img class="child-img" filmeid="15"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=16"><img class="child-img" filmeid="16"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=17"><img class="child-img" filmeid="17"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=18"><img class="child-img" filmeid="18"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=19"><img class="child-img" filmeid="19"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=20"><img class="child-img" filmeid="20"></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-scroll-Fmomento">
				<div class="tituloCatalogo">
					<h2>Filmes Destaque</h2>
					<div class="cover2">
						<button class="icon1" data-target="list2" onclick="scroll_left(this)"><i class="ri-arrow-left-s-line"></i></button>
						<button class="icon2" data-target="list2" onclick="scroll_right(this)"><i class="ri-arrow-right-s-line"></i></button>
						<div class="scroll-images" id="list2">
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=21"><img class="child-img" filmeid="21"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=22"><img class="child-img" filmeid="22"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=23"><img class="child-img" filmeid="23"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=24"><img class="child-img" filmeid="24"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=25"><img class="child-img" filmeid="25"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=26"><img class="child-img" filmeid="26"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=27"><img class="child-img" filmeid="27"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=28"><img class="child-img" filmeid="28"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=29"><img class="child-img" filmeid="29"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=30"><img class="child-img" filmeid="30"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=31"><img class="child-img" filmeid="31"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=32"><img class="child-img" filmeid="32"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=33"><img class="child-img" filmeid="33"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=34"><img class="child-img" filmeid="34"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="filmetemplate.php?id=35"><img class="child-img" filmeid="35"></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-scroll-Smomento">
				<div class="tituloCatalogo">
					<h2>Séries do Momento</h2>
					<div class="cover3">
						<button class="icon1" data-target="list3" onclick="scroll_left(this)"><i class="ri-arrow-left-s-line"></i></button>
						<button class="icon2" data-target="list3" onclick="scroll_right(this)"><i class="ri-arrow-right-s-line"></i></button>
						<div class="scroll-images" id="list3">
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=1"><img class="child-img" serieid="1">></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=2"><img class="child-img" serieid="2"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=3"><img class="child-img" serieid="3"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=4"><img class="child-img" serieid="4"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=5"><img class="child-img" serieid="5"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=6"><img class="child-img" serieid="6"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=7"><img class="child-img" serieid="7"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=8"><img class="child-img" serieid="8"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=9"><img class="child-img" serieid="9"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=10"><img class="child-img" serieid="10"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=11"><img class="child-img" serieid="11"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=12"><img class="child-img" serieid="12"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=13"><img class="child-img" serieid="13"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=14"><img class="child-img" serieid="14"></a></div>
							<div class="child"><i class="heartBtn ri-heart-add-line"></i><a href="serietemplate.php?id=15"><img class="child-img" serieid="15"></a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="link">
			<ul>
				<li><a href="#">Audiodescrição</a></li>
				<li><a href="#">Relações com investidores</a></li>
				<li><a href="#">Cartão pré-pago</a></li>
			</ul>
			<ul>
				<li><a href="#">Avisos legais</a></li>
				<li><a href="#">Termos de Uso</a></li>
				<li><a href="#">Informações corporativas</a></li>
			</ul>
			<ul>
				<li><a href="#">Imprensa</a></li>
				<li><a href="#">Carreiras</a></li>
				<li><a href="#">Central de Ajuda</a></li>
			</ul>
			<ul>
				<li><a href="#">Privacidade</a></li>
				<li><a href="#">Entre em contato</a></li>
				<li><a href="#">Preferência de cookies</a></li>
			</ul>
		</div>
		<h5>© 2022 KINOPLAY.</h5>
	</footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/cb4778956c.js" crossorigin="anonymous"></script>

<script>
	$(".btn").click(function () {
		$(".input").toggleClass("click")
		$("span").toggleClass("click")
	})
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Customizar JS-->
<script src="js/custom.js"></script>

<script src="js/favButton.js"></script>

<script src="js/scrollScript.js"></script>

<script src="js/filme_cards.js"></script>

<script src="js/serie_cards.js"></script>

</html>