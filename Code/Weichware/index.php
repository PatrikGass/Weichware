<?php 
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php")
?>




    

    <!-- Weiterleitung zu Regestrierungn -->
    <div class="jumbotron">
      <div class="container">
        <h1> <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a></p></h1>
<img width: 100%; height: auto;  src='Slide1.jpg' />
<img src='Slide4.jpg' />  
        
        <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Jetzt registrieren</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Fußzeile -->
      <div class="row">
        <div class="col-md-4">
          <h2>Umwandlung von Text to Audio</h2>
          <ul>
          	<li>PDF-Dateien</li> 
          	<li>ODF-Dateien</li>
          	<li>Word-Dateien</li>
          	<li>TXT-Dateien</li>
          	<li>ODF-Dateien</li>
          </ul>
         
        </div>
        <div class="col-md-4">
          <h2>Freemodelle</h2>
          <p>Bei Audioboox erhälst du eine Menge Vorteile, wenn du dich anmeldest. Du kannst bis zu x Zeichen ganz einfach in eine Audiodatei umwandeln oder direkt anhören. </p>
          <p><a class="btn btn-default" href="premium.php" target="_blank" role="button">Weitere Informationen &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Premiummodelle</h2>
          <p>Bei Audioboox erhälst du noch mehr Vorteile, wenn du ein Premiumabo abschließt. Entscheide dich noch heute und benutze unseren Service bis zu x Zeichen. Verbrauche nur das was du brauchst eine entsprechende Einstufung in unser Tariftabelle nehmen wir automatisch vor.</p>
          <p><a class="btn btn-default" href="premium.php" target="_blank" role="button">Weitere Informationen &raquo;</a></p>
        </div>
      </div>
	</div>
      

  
<?php 
include("templates/footer.inc.php")
?>
