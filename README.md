# Weichware - Audioboox 2023
Softwaretechnik Projekt
## 1. Ziele der Software
Ziel der Software ist es Textdateiformate zu Audiodateiformate zu konvertieren.
![Alt-Text](/Dokumentation/UseCase.png)

## 2. Infrastruktur

![Alt-Text](/Dokumentation/Sequenzdiagramm.png)

## 3. Installationsanleitung
Vorraussetzung: PHP-Server und SQL-Server-Umgebung nach Kapitel 2.Infrasturtur 
1. Download xyz.zip
2. Entpacken der xyz.zip auf dem Server oder im xampp-Order C:/xampp/htdocs/audioboxx
3. Starten des PHP und SQL-Servers
4. Einrichten der SQL-Datenbank unter xampp https://localhost/phpmyadmin
5. Import der SQL-Datenbank sql-Datenbank audioboox/data/user.sql
6. Aufruf der Adresse des Servers oder per Xaamp via localhost/audioboox/index.php
7. Aufruf der Adresse des Servers außerhalb des Heimnetzwerkes nur via Freigabe des Routers
8. Anmelden mit Testuser test pw:test mittels Freeaccount
9. Upload einer Test.pdf
10. Abspielen der Test.mp3
-
1. Download des Verzeichnisses Weichware-main als zip aus github
2. den Ordner audioboox_final auf der zip im xampp-Order C:/xampp/htdocs/ entpacken
3. XAMPP Control Panel öffnen und "Apache" und "MySQL" starten
4. im Browser http://localhost/audioboox_final/Startseite/index.php aufrufen

## 4. Testumgebung
XAMPPv3.3.0

## 5.IT-Konzept
Diese Datei dient nur der ersten Installation. Die vollständige Dokumentation befindet sich in der IT-Konzept.md
1. XAMPP Control Panel öffnen
2. bei "Apache" auf Konfig klicken und anschließend Apache(hhtpd.conf)
3. folgendes am Ende des Dokuments einfügen: 
          AddHandler cgi-script .py
          ScriptInterpreterSource Registry-Strict
4. im XAMPP Control Panel unter "Apache" auf Konfig klicken und anschließend PHP(php.ini) gehen
5. Nach "file_uploads" suchen und sicherstellen, dass mit "file_uploads = On" der Fileupload funktioniert


## 5.Autoren
Patrik Gass, 5. Semester Wirtschaftsinformatik Online, Werkstudent im Fachbereich Arbeitsplatz und Kommunikation
Erik Wilmer HIER FEHLT TEXT
Roberto Demny HIER FEHLT TEXT
Jan-Marek Friese, 5.Semster Wirtschaftsinformatik Online, Erfahrung in Projekte und Programmierung
Friedrich Föll HIER FEHLT TEXT

Die Idee für das Projekt der Weichware Group kommt von Patriks Gass. Umgesetzt wird es von allen Teilnehmern. Die Programmieraufgabe haben Patriks Gass, Friedrich Föll und Jan-Marek Friese übernommen. Die Dokumentation wird von … erstellt. Das Pitchdeck und Endpräsentation wurde von Erik Wilmer entwickelt und ausgearbeitet. Die Dokumentation und das IT-Konzept wurde von Roberto Demny und Jan-Marek Friese geschrieben.


