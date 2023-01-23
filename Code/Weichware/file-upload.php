<?php 
error_reporting(0);
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php");


   $filename = $_FILES["myfile"]["name"];
   $filesize = $_FILES["myfile"]["size"];
   $tempfile = $_FILES["myfile"]["tmp_name"];
   $filenameWithDirectory = "audioboxx/uploaded-file/".$filename;
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Audioboox
		</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<main style=display:block>
			<div>
				<section id="input">
					<!-- Dateiauswahl, nur PDF zugelassen -->
					<form action="file-upload.php"  method="post" enctype="multipart/form-data">
						<label for="myfile">
							PDF Datei auswählen:
						</label>
						<br>
						<br>
						<!-- Upload Button -->
						<input type="file" name="myfile" class="bTTS" accept="application/pdf"><br/><br/>
						<button type="submit" class="bTTS" id="convert-button">
							Datei hochladen
						</button>
					</form>
				<?php
			   if(rename($tempfile, "audioboox/uploaded-file/audioboox.pdf"))
			   #if(rename($tempfile, "uploaded-file/audioboox.pdf"))
			   {
			      echo "<p>Ihre Datei wurde erfolgreich hochgeladen.</p>";
			      echo "<p>Dateiname= <b>$filename</b></p>";
				#$var = shell_exec('python audioboox/createaudio2.py '.$filename);
			      
				  #Weiterleitung zur Python Anwendung (PDF extrahieren und TTS in Audioformat)
					echo '<form method="POST" action="http://localhost/Weichware/audioboox/createaudio2.py"  target="_blank">
			      <input type="submit" class="bTTS" style="align-items: center;" value="AudioBoox erstellen"/>
			    </form>';

echo '<form method="post" action="libary.php" v>
 <input type="submit" class="bTTS"  value="Bibliothek"/>       
</form>';				

			   }
			   else
			   {
			      echo "Fehler beim Upload der Datei. Bitte wählen Sie eine Datei aus";
			   }
			?>
					</section>
				</div>
			</main>

		</div>

							<?php 
include("templates/footer.inc.php")
?>
	</body>


</html>
