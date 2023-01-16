<!DOCTYPE html>
<?php
   $filename = $_FILES["myfile"]["name"];
   $filesize = $_FILES["myfile"]["size"];
   $tempfile = $_FILES["myfile"]["tmp_name"];
   $filenameWithDirectory = "uploaded-file/".$filename;
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Audioboox
		</title>
		<link rel="stylesheet" href="HTML/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<header id="navbar">
				<nav>
					<ul>
						<li>
							<a href="HTML/index.html">
								Home
							</a>
						</li>
						<li>
							<a href="HTML/Text-to-Speech.html">
								Text-to-Speech
							</a>
						</li>
						<li>
							<a href="HTML/Library.html">
								Bibliothek
							</a>
						</li>
						<li>
							<a href="HTML/premium.html">
								Premium
							</a>
						</li>
						<li>
							<a href="HTML/Account.html">
								Mein Konto
							</a>
						</li>
					</ul>
				</nav>
				<h1>
					Willkommen bei Audioboox
				</h1>
			</header>
			<main style=display:block>
				<div>
					<section id="input">
						<form action="file-upload.php" method="post" enctype="multipart/form-data">
							<label for="myfile">
								PDF Datei auswählen:
							</label>
							<br>
							<br>
							<!-- file select button -->
							<input type="file" name="myfile" accept="application/pdf"><br/><br/>
							<button type="submit" class="bTTS" id="convert-button">
								Datei hochladen
							</button>
						</form>
					</section>
				</div>
			</main>
			<?php
			   if(rename($tempfile, "uploaded-file/audioboox.pdf")
			      #move_uploaded_file($tempfile, $filenameWithDirectory)
			      )
			   {
			      echo "<p>Ihre Datei wurde erfolgreich hochgeladen.</p>";
			      echo "<p>Dateiname= <b>$filename</b></p>";
			      #echo "<p>File size = <b>$filesize</b></p>";

			      echo '<form method="POST" action="http://localhost/Weichware/audioboox_v3/createaudio2.py">
			      <input type="submit" value="AudioBoox erstellen"/>
			    </form>';

			   }
			   else
			   {
			      echo "Fehler beim Upload der Datei. Bitte wählen Sie eine Datei aus";
			   }
			?>
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
		<div class="footer-left">
			<p class="footer-links">
				<a href="impressum.html">
					Impressum
				</a>
				·
				<a href="Contact.html">
					Kontakt
				</a>
			</p>
			<div class="footer-icons">
				<a href="https://twitter.com/audioboox">
					<i class="fa fa-twitter">
					</i>
				</a>
				<a href="https://www.linkedin.com/company/audioboox">
					<i class="fa fa-linkedin">
					</i>
				</a>
				<a href="https://github.com/PatrikGass/Weichware">
					<i class="fa fa-github">
					</i>
				</a>
			</div>
		</div>
	</footer>

</html>
