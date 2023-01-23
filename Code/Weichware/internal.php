<?php
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");

//Überprüfe, dass der User eingeloggt ist
//Der Aufruf von check_user() muss in alle internen Seiten eingebaut sein
$user = check_user();

include("templates/header.inc.php");
?>

<div class="container main-container">

<h1>Herzlich Willkommen!</h1>

Hallo <?php echo htmlentities($user['vorname']); ?>,<br>
Herzlich Willkommen im internen Bereich!<br><br>
 
<?php if(!(is_dir('audioboox/profiles/'.$user['id']) OR is_file('audioboox/profiles/'.$user['id']) OR is_link('audioboox/profiles/'.$user['id']) ))
    return mkdir ('audioboox/profiles/'.$user['id'], 0700); ?>


<div class="panel panel-default">
 
<table class="table">
<tr>
	<th>#</th>
	<th>Farbe</th>
	<th>Text</th>
	<th>Ansprechpartner</th>
</tr>
<tr>
	<th>1</th>
	<th>Rot</th>
	<th>Pythonserver konfigurieren</th>
	<th>Friese</th>
</tr>

<tr>
	<th>2</th>
	<th>Rot</th>
	<th>Pythonserver Parameter für Nutzerprofile einfügen</th>
	<th>Föll/Gass</th>
</tr>

<tr>
	<th>2</th>
	<th>Grün</th>
	<th>Dokumentation vervollständigen</th>
	<th>Demny</th>
</tr>
</table>
</div>


</div>
<?php 
include("templates/footer.inc.php")
?>
