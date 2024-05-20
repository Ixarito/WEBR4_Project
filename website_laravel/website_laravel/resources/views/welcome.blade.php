<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>

	<!-- navbar css -->
	<link rel="stylesheet" href="{{ asset("css/navbar.css") }}">
	<!-- global css -->
	<link rel="stylesheet" href="{{ asset("css/global.css") }}">
	<!-- home css -->
	<link rel="stylesheet" href="{{ asset("css/home.css") }}">
	<!-- footer css -->
	<link rel="stylesheet" href="{{ asset("css/footer.css") }}">

		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="logo">
				<a href="index.html">
					ParkReference
				</a>
			</div>
			<div class="hamburger-menu">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
			</div>
			<!-- desktop -->
			<div class="nav-menu">
				<a href="#" class="current-page-menu">Home</a>
				<a href="#">Career</a>
				<a href="#">About</a>
				<a href="#">Contact</a>
			</div>
		</nav>
		<!-- mobile -->
		<div class="nav-menu-mobile">
			<a href="#">Home</a>
			<a href="#">Career</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
		</div>
	</header>
	<div class="home-background">
		<div class="home-content">
			<div class="home-title" id="title">ParkReference</div>
			<a class="home-button" id="title-button" href="search.html">Rechercher</a>
			<div class="coaster"></div>
			<div class="gradient"></div>
		</div>
	</div>

	<div class="page-content">
		<div id="page-container" class="container">
			<div>
				<div class="text-area">
					<h1 class="subtitle">
						Qui sommes <span class="b-neon-text">nous</span>?
					</h1>
					<p>
						Votre guide ultime pour découvrir les parcs d'attractions du monde entier !
					</p>
					<p>
						Grâce à notre base de données complète, vous pouvez explorer une multitude de parcs, découvrir leurs attractions phares, leurs horaires, leurs tarifs et bien plus encore. Que vous soyez un aventurier à la recherche de sensations fortes ou une famille en quête d'une sortie divertissante, The Park Database est votre compagnon de voyage idéal dans le monde merveilleux des parcs d'attractions.
					</p>
					<p>
						Rejoignez-nous dans cette aventure passionnante et commencez à planifier vos prochaines escapades magiques avec <span class="b-neon-text">ParkReference</span> !
					</p>
				</div>
			</div>
			<div>
				<img class="about-image" src="assets/private/images/about.jpg" alt="">
			</div>
		</div>
		<div class="container direction-reverse">
			<div>
				<iframe class="map" id="gmap_canvas"
				src="https://maps.google.com/maps?q=28.4160036778%C2%B0,%20-81.5811902834%C2%B0
				&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
				scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</div>
			<div>
				<div class="text-area">
					<h1 class="subtitle">
						Voici un <span class="b-neon-text">park</span>
					</h1>
					<p id="park-name">
						Magic Kingdom Park
					</p>
					<p id="park-city">
						➜ Orlando, Floride
					</p>
					<p id="park-type">
						➜ Parc d'attractions
					</p>
					<a class="neon-button">
						En savoir plus
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
			<div class="footer-logo">
				<a href="/">
					ParkReference - WERBR4
				</a>
			</div>
			<div class="footer-text">
				<p>
					© 2024 Angielczyk Marcel. Tous droits réservés.
				</p>
			</div>
	</div>

	<!-- <script src="assets/private/scripts/home.js"></script> -->
	<!-- <script src="assets/private/scripts/navbar.js"></script> -->
</body>
</html>