<?php

session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();

include("templates/header.inc.php");
?>
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




			<main style=display:block>
				<div>
					<br>
					<div>
						<label for="audio-upload">
							Hörbuch zum abspielen auswählen:
							
						</label>
						<table>
						<?php 
$statement = $pdo->prepare("SELECT * FROM users ORDER BY id");
$result = $statement->execute();
$count = 1;

$dir    = 'audioboox/profiles/'.$user['id'].'/';
$files1 = scandir($dir);


for($i=2; $i < count($files1); $i++) {
echo "	<tr><td>";

echo "<br> ".$dir.$files1[$i];
echo " </td> <td>";
echo "					<audio controls id='audio$i'  >	
							<source src=$dir$files1[$i] type='audio/mpeg'>
					</audio>";
echo "</td></tr>";
}

$count = 1;

$dir1    = 'audioboox/audiofile/';
$files1 = scandir($dir1);


for($i=2; $i < count($files1); $i++) {
echo "	<tr><td>";

echo "<br> ".$dir1.$files1[$i];
echo " </td> <td>";
echo "					<audio controls id='audio$i'  >	
							<source src=$dir1$files1[$i] type='audio/mpeg'>
					</audio>";
echo "</td></tr>";
}



?>
</table>						<br>
<br>
						<!-- file select button -->
						<button class="bLib" style="width:120px; height:35px;" onclick="document.getElementById('audio-upload').click()">
							Hörbuch auswählen
						</button>
						<input id="audio-upload" type="file"  style="display:none" accept=".mp3"/>
					</div>
					<br>
					<p id=title>
					</p>
					<audio controls id=audio style="display:none">
						<source src="" type="audio/ogg">
							<source src="" type="audio/mpeg">
					</audio>
				</div>
			</main>
		</div>
		<script>
			// function to handle the audio file change
			function changeHandler({
				target
			}) {
				// Make sure we have files to use
				if (!target.files.length) return;

				// Create a blob that we can use as an src for our audio element
				const urlObj = URL.createObjectURL(target.files[0]);

				// Create an audio element
				const audio = document.getElementById("audio");
				// Display the audio element
				document.getElementById("audio").style.display = "initial";
				// Get the title element
				const title = document.getElementById("title");
				// Set the title of the audio
				title.innerText = this.files[0].name;


				// Allow us to control the audio
				audio.controls = "true";

				// Set the src and start loading the audio from the file
				audio.src = urlObj;
				// set the starting speed of the audio
				audio.playbackRate = 1.30;
			}

			document.getElementById("audio-upload").addEventListener("change", changeHandler);
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
