<?php 
session_start();
require_once("inc/config.inc.php");
require_once("inc/functions.inc.php");
include("templates/header.inc.php")
?>
<html>
	<!-- Kontaktinfos hier -->
	<head>
		<meta charset="utf-8">
		<title>
			Audioboox
		</title>
	</head>
	<body>
		<p>
			<strong>
				Impressum
			</strong>
		</p>
		<p>
			Anbieter:
			<br />
			Audioboox GmbH
			<br />
			Luxemburger Straße 10
			<br />
			13353 Berlin
		</p>
		<p>
			Kontakt:
			<br />
			Telefon: 030/1234567-8
			<br />
			Telefax: 089/1234567-9
			<br />
			E-Mail: mail@Audioboox.de
		</p>
		<p>
			 
		</p>
		<footer>
					<?php 
include("templates/footer.inc.php")
?>
</footer>
	</body>

</html>
