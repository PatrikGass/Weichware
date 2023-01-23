# Weichware - Audioboox 2023 
Softwaretechnik Projekt 

Projektname: Weichware – Audioboox 

Version: 1 

Autor: Friese, Föll, Wilmer, Gass, Demny 


## 1. Ziele der Software
Ziel der Software ist es Textdateiformate zu Audiodateiformate zu konvertieren.
![Alt-Text](/Dokumentation/UseCase.png)


## 2. Dokumentenhistorie
| Aufgabe   |      Termin      |  Autor |Status |Version |
|----------|:-------------:|------:|------:|------:|
|IT-Konzept erstellen      |       18.10.2022|  Friese | Erledigt|  0 |  
|Bedienoberfläche erstellen |      23.12.2022 | Föll |   Erledigt  | |
|Serverstruktur erstellen  |      23.12.2022  |Grass|   Erledigt  | |
|PHP-Programm Upload        |      23.12.2022|  Föll |   Erledigt   ||
|PHP-Programm Textausgabe-API |    23.12.2022  |Grass  | Erledigt   ||
|PHP-Programm Userausgabe    |     23.12.2022 | Föll  |  Erledigt   ||
|PHP-Programm Nutzeraccount  |   18.01.2023 | Friese|  Erledigt|  |
|Abnahme für Projektstart    |    17.01.2023 | Friese|  Offen   ||
|Übersetzung in weitere Sprachen|  1.3.2023  |  |      Offen   ||
|Android-APP Oberfläche erstellen|1.3.2023  |  |      Offen  ||
|Android-APP API-TTS aufrufen|1.3.2023     |   |  Offen  ||
|Android-App            |1.9.2023       |  | Offen  ||
|PDF2Audio             |   1.3.2023    |  |    Offen  ||
|Abnahme für Projektstart |23.01.2023    |   |   Offen|  |

## 2. Infrastruktur

![Alt-Text](/Dokumentation/Sequenzdiagramm.png)

## 3. Installationsanleitung
Vorraussetzung: Installierter Python auf dem PHP-Server(siehe Anleitung.md), aktivierter File-Upload und SQL-Server-Umgebung nach Kapitel 2.Infrasturtur 
1. Download htdocs.zip oder Download des Verzeichnisses Code als zip aus github https://github.com/PatrikGass/Weichware.git
2. Entpacken der htdocs.zip oder des Verzeichnise "Code" auf dem Server oder im xampp-Order C:/xampp/htdocs/Weichware
3. Starten des PHP und SQL-Servers
4. Einrichten der SQL-Datenbank unter xampp https://localhost/phpmyadmin (keine sichere Verbindung bestätigen)
5. Text aus database.sql kopieren
6. In Phpmyadmin in der Testdatenbank auf den Reiter Sql und in das Eingabefeld einfügen und mit okay bestätigen.
6. Aufruf der Adresse des Servers oder per Xaamp via Browser http://localhost/Weichware/ aufrufen
7. Aufruf der Adresse des Servers außerhalb des Heimnetzwerkes nur via Freigabe des Routers
8. Jetzt registrieren mit Testuser test@test.de pw:test mittels Testaccount
9. Upload einer Test.pdf
10. Abspielen der Test.mp3 in Bibliothek/Archiv

## 3a Python und File-Upload in XAMPP aktivieren
1. XAMPP Control Panel öffnen
2. bei "Apache" auf Konfig klicken und anschließend Apache(hhtpd.conf)
3. folgendes am Ende des Dokuments einfügen: 
          AddHandler cgi-script .py 
          ScriptInterpreterSource Registry-Strict
4. im XAMPP Control Panel unter "Apache" auf Konfig klicken und anschließend PHP(php.ini) gehen
5. Nach "file_uploads" suchen und sicherstellen, dass mit "file_uploads = On" der Fileupload funktioniert
-


## 4. Testumgebung XAMPP
XAMPPv3.3.0 PHP und SQL sowie Python
ohne Mailversand, in XAMPP nicht möglich
| Aufgabe   |Anzahl Versuche|      Termin      |  Tester |Status |Version |
|----------|:------:|:--------------:|------:|------:|------:|
| Datei upload Test PDF-Dateien |10|      18.12.2022|  Gass | Erledigt|  0 |  
|PHP-Datei upload Test PDF-Dateien |12|       18.12.2022|  Föll | Erledigt|  0 |  
|PHP-Datei upload Test PDF-Dateien |10|      04.01.2023|  Friese | Erledigt|  0 | 
|PHP-SQL Useraccount|   5|     04.01.2023| Friese | Erledigt|  0 |  
|PHP-SQL Useraccount|  2|     15.01.2023|  Gass | Erledigt|  0 |  
|PY-Umwandlung von Dateien|  20|     15.12.2022|  Gass | Erledigt|  0 |  
|PY-Umwandlung von Dateien| 20|       15.12.2022| Föll | Erledigt|  0 |  
|PY-Umwandlung von Dateien|10|       15.12.2022|  Friese | Erledigt|  0 |  
|Mail-Versand simuliert|  10|     15.01.2023|  Friese | Erledigt|  0 |  


## 5. Testumgebung Webhosting
http://audioboox.bplaced.net/
ohne Umwandlungsfunktion, weil es sich um Webhosting und um keinen Server handelt.

| Aufgabe   |Anzahl Versuche|      Termin      |  Tester |Status |Version |
|----------|:------:|:--------------:|------:|------:|------:|
| Datei upload Test PDF-Dateien |10|      18.12.2022|  Gass | Erledigt|  0 |  
|PHP-Datei upload Test PDF-Dateien |12|       18.12.2022|  Föll | Erledigt|  0 |  
|PHP-Datei upload Test PDF-Dateien |10|      04.01.2023|  Friese | Erledigt|  0 | 
|PHP-SQL Useraccount|       5| 04.01.2023| Friese | Erledigt|  0 |  
|PHP-SQL Useraccount|      2|  15.01.2023| Gass | Erledigt|  0 |  
|PY-Umwandlung von Dateien|     20|   15.12.2022| Gass | Erledigt|  0 |  
|Mail-Versand |   10  | 15.01.2023|  Friese | Erledigt|  0 |  

## 6. Vorgehensweise
Entwickelt der Programmdatei in PHP oder PY
Überprüfung durch Teammitglied
Upload auf Git
Kanban geupdatet
wöchentliches Teammeeting Fortschritte vorgestellt

## 7. Sicherheit
### geschützte Useraccounts
Die Useraccounts sind mit Mail-Passwort Kombination in einer passwortgeschützten SQL-Datenbank in hashform gespeichert.

### Uploadfiles
Die Dateien, welche convertiert wurden sind nur im eigenen User-Bereich einsehbar.

### SSL-Verschlüsselung
noch nicht ausgeführt

###

## 8.IT-Konzept
Diese Datei dient nur der ersten Installation. Die vollständige Dokumentation befindet sich in der IT-Konzept.md



## 9.Autoren
Patrik Gass, 5. Semester Wirtschaftsinformatik Online, Werkstudent im Fachbereich Arbeitsplatz und Kommunikation
Erik Wilmer, Präsentationen
Roberto Demny IT-Konzept
Jan-Marek Friese, 5.Semster Wirtschaftsinformatik Online, Erfahrung in Projekte und Programmierung
Friedrich Föll Programmierung PY/PHP

Die Idee für das Projekt der Weichware Group kommt von Patriks Gass. Umgesetzt wird es von allen Teilnehmern. Die Programmieraufgabe haben Patriks Gass, Friedrich Föll und Jan-Marek Friese übernommen. Die Dokumentation wird von Jan-Marek Friese erstellt. Das Pitchdeck und Endpräsentation wurde von Erik Wilmer mit Unterstütung des Teams entwickelt und ausgearbeitet. Die Dokumentation und das IT-Konzept wurde von Roberto Demny und Jan-Marek Friese geschrieben.


