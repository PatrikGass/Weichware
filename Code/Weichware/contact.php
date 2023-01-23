<?php 
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Audioboox
		</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			
			<main>
				<div>
					<!-- Kontaktaufnahme Formular -->
					<form action="submit-form.php" method="post">
						<div style="display: block;">
							<label for="name">
								Name:
							</label>
							<br>
							<input type="text" id="name" name="name" required>
						</div>
						<br>
						<div style="display: block;">
							<label for="email">
								Emailadresse:
							</label>
							<br>
							<input type="email" id="email" name="email" required>
						</div>
						<br>
						<div style="display: block;">
							<label for="message">
								Nachricht:
							</label>
							<br>
							<textarea id="message" name="message" required>
							</textarea>
						</div>
						<br>
						<button style="width:120px; height:35px;" onclick="document.getElementById('submit').click()">
							Absenden
						</button>
						<input id="submit" type="submit" value="Submit" style="display:none">
					</form>
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
		<footer>

			<?php 
include("templates/footer.inc.php")
?>
		</footer>
	</body>

</html>
