
<?php 

include("templates/header.inc.php")
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Audioboox
		</title>
		//<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		<div class="container">

			<main style=display:block>
				<div class="basic">
					<section>
						<h3>
							Basic
						</h3>
						<p style=color:white>
							Preis: 3,99€/Monat
						</p>
						<ul>
							<li>
								50.000 Zeichen pro Monat
							</li>
							<li>
								Standard Audio Qualität
							</li>
							<li>
								Standard Kundenservice
							</li>
						</ul>
<p><a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a></p>
					</section>
				</div>
				<div class="pro">
					<section>
						<h3>
							Pro
						</h3>
						<p style=color:white>
							Preis: 8,99€/Monat
						</p>
						<ul>
							<li>
								150.000 Zeichen pro Monat
							</li>
							<li>
								Hohe Audio Qualität
							</li>
							<li>
								Prioritäts Kundenservice
							</li>
						</ul>
<p><a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a></p>
					</section>
				</div>
				<div class="premium">
					<section>
						<h4>
							Premium
						</h4>
						<p style=color:white>
							Preis: 14,99€/Monat
						</p>
						<ul>
							<li>
								Unbegrenze Konvertierungen
							</li>
							<li>
								Höchste Audio Qualität
							</li>
							<li>
								Prioritäts Kundenservice
							</li>
						</ul>
<p><a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a></p>
					</section>
				</div>
			</main>
		</div>
		<script>
			// get navbar and main section elements
			var navbar = document.getElementById("navbar");
			var mainSection = document.querySelector("main");

			// get height of navbar for use in calculations
			var navbarHeight = navbar.offsetHeight;

			// listen for page load and set margin for main section
			document.addEventListener("DOMContentLoaded",
			function() {
				mainSection.style.marginTop = navbarHeight + "px";
			});

			// listen for scroll event and apply sticky class to navbar
			window.addEventListener("scroll",
			function() {
				if (window.pageYOffset >= navbarHeight) {
					navbar.classList.add("sticky");
					mainSection.style.marginTop = "0";
				} else {
					navbar.classList.remove("sticky");
					mainSection.style.marginTop = navbarHeight + "px";
				}
			});
		</script>
	</body>
	<footer>

					<?php 
include("templates/footer.inc.php")
?>

	</footer>

</html>
