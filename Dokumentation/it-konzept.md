# IT-Konzept
Projektname: Weichware – PDF2Hörbuch  
Version: 0  
Autor: Friese,Föll,Wilmer,Gass,Demny 

## Dokumenthistorie
Aufgabe                         Termin      Autor   Status    Version  
IT-Konzept erstellen            18.10.2022  Friese  Erledigt  0   
Bedienoberfläche erstellen      23.12.2022  Föll    Erledigt   
Serverstruktur erstellen        23.12.2022  Grass   Erledigt   
PHP-Programm Upload             23.12.2022  Föll    Erledigt   
PHP-Programm Textausgabe-API    23.12.2022  Grass   Erledigt   
PHP-Programm Userausgabe        23.12.2022  Föll    Erledigt   
PHP-Programm Nutzeraccount      18.01.2023  Friese  Erledigt   
Abnahme für Projektstart        17.01.2023  Friese  Offen   
Übersetzung in weitere Sprachen   1.3.2023          Offen   
Android-APP Oberfläche erstellen  1.3.2023          Offen  
Android-APP API-TTS aufrufen      1.3.2023          Offen  
Android-App                       1.9.2023          Offen  
PDF2Audio                         1.3.2023          Offen  
Abnahme für Projektstart        23.01.2023          Offen  



## Gesamtüberblick
![Alt-Text](/Dokumentation/Slide1.jpg)
Ziel des Projektes ist es für Studenten eine benutzerfreundliche Anwendung zu schaffen, welche es ermöglicht Skripte, Artikel und weitere Textdokumente in PDF-Form in Audioformat umzuformen und auf mobilen Geräten zur Verfügung zu stellen. Das Projekt entstand auf der Idee der immer populärer werdenden Hörbücher, es ermöglicht beispielsweise Studenten Lernskripte auditiv wahrzunehmen und Lernen besser in den Alltag zu integrieren.  
Text-to-Speech nur mit gängigen Formaten im I/O. Schnittstelle zwischen Filesystem und Input, sowie Filesystem und Output 

## Anforderungen: gängige Formate, Wartbarkeit, skalierbar, Audiooption, Filesystem, Backups 

## Basis
Dieses Projekt wird im Rahmen einer Seminaraufgabe im Modul Softwaretechnik-Projekt im Wintersemester 2022/2023 erstellt und bearbeitet. 

## Allgemeine Informationen:
Bereitstellung von PDF 
Extrahierung von Text 
Umwandlung Text zu Audioformat mit Text to Speech (TTS) 
Ausgabe von Audio auf Endgeräten 

## Allgemeine Bedingungen:
PHP 
HTML 
Javascript 
~~Android~~
Python


### Anwendungsdiagramm  
![Alt-Text](/Dokumentation/UseCase.png)

## Voraussetzungen  zum erfolgreichem Projektabschluss
Programmierkenntnisse in PHP
Programmierkenntnisse in Android/Java
Text-to-speech-Umwandlung  

### Software  
Welche Software muss auf welchen Systemen vorhanden sein.  
Benutzer: Webbrowser 
System: Server mit Datenablage + PHP Support + SQL-Datenbank
Extern: TTS-API 

### Hardware  
Webserver  
Unterstützt PHP&SQL
Internetanbindung

### Daten 
Text im gängigen Format 
Audio Output 
Evtl. Benutzerkonto 

## Zielsetzungen  
![Alt-Text](/Dokumentation/Slide4.jpg)
Das Ziel dieser Software isdie Bereitstellung von eine Audioausgabe von Testdokumenten mit einem Schwerpunkt auf Usability und Wartbarkeit.  

### Software  
Das Webinterface soll auf den aktuellen Versionen von Firefox Klar, Microsoft Edge und Chrome Mobil lauffähig sein.  
Die Datenschnittstellen sollen, wenn möglich CSV verwenden.  
Die Anwendungen müssen auf Windows10 sowie Android laufen.  

### Performanz
Die Webanwendung darf eine maximale Zugriffszeit von 30 Sekunden bei 10 parallelen Nutzern nicht überschreiten.  

### Verfügbarkeit  
Die Anwendung wird mehrmals im Semester benötigt. Es sollte eine allgemeine Verfügbarkeit von 98% anvisiert werden. Hochverfügbarkeitslösungen werden nicht eingeplant, bei hoher Anzahl an Usern ist die Verwendung von Loadbalancer möglich.  

##Ansprechpartner  
<fachlich>  
Team Weichware 

<technisch>  
Team Weichware  

## Daten  
Die Textdokumente werden durch den User bereitgestellt bzw. Hochgeladen. Diese Daten werden anschließend von der Software über eine Schnittstelle eingelesen und in Text-to-Speech umgewandelt. Die daraus entstehenden Audiodaten werden dann über den vom User verwendeten Browser geladen und abgespielt. 

## Überblick  

Die Textdateien sollen in gängigen Formaten verwendet werden, unter die gängige fallen pdf, docs, odt und txt. Dies dient dazu, dass die Besonderheiten der einzelnen Formate beachtet werden kann, ohne dass jegliche Nischenformate verarbeitet werden können, da dies nicht in einem akzeptablen Kosten-Nutzen-Faktor steht.  

Eine stabile Verbindung ist wichtig, damit die Audiowiedergabe möglichst ohne Unterbrechung und Verzögerung funktioniert. Alternativ kann man über eine Downloadmöglichkeit nachdenken, ob diese die Probleme nicht verringern könnten. Die angebotenen Datentypen sollten auch in einem gängigen Format angeboten werden.  

  

## Architektur:
Durch die Anforderung der Skalierbarkeit soll die Erweiterung auf weitere I/O Formate möglichst einfach sein. Die Oberfläche soll über den Browser angesteuert werden können für den Input, wie auch die Ausgabe.
Die Zugriff der PHP-Dateien auf die interne Dateiablage ist notwendig. Der User kommuniziert auf dem Server mit einem PHP-Server. Das Einloggen erfolgt mittel SQL-Datenbank.
Die Umwandlung einer hochgeladenen Datei erfolgt mittels API-Schnittstelle auf einem Google-Server. 

![Alt-Text](/Dokumentation/Sequenzdiagramm.png)  
 
 
### Besondere Bemerkungen zur Architektur: 
API Google TTS 
pyPDF2 
Schnittstellen als Webservice 
API TTS 
 


 
 
### Datenflussdiagramm 
 
![Alt-Text](/Dokumentation/Sequenzdiagramm.png)

### Datenentitäten 

#### Was  
Testdokument 
Audiodatei 

#### Woher kommen 
Usereingabe 
Bereitstellung Browser 
Download   

#### Wohin  
Text-to-Speech 
Server 

#### Wann  
Bei Bedarf 
Full-Backup der Daten jeden Sonntag 17 Uhr 
Diffenzielles Backup der Daten jeden Tag um 20 Uhr 

### <Datenintegrität>  
Es dürfen nur Textdokumente im gängigen Format verwendet werden, dies könnte bei der Abgabe über eine Abfrage gelöst werden. Ebenso muss sichergegangen werden, dann der User das gewünschte Format erhält, mit dem dieser arbeiten kann.    
### <Datenmodelle>  
Hier sollten z.B. die Datenmodellierungen zu verwendeten Datenbanken per Skript, Diagramm und oder Referenz auf externe Dateien hinterlegt werden.  
Aber auch ein paar Exceltabellen oder z.B. XML-Dateien sind es gelegentlich wert hier ordentlich modelliert zu werden.  
###Steuerung  
Hier soll beschrieben werden, wie, von wem und wann genau eine Anwendung aufgerufen werden soll. Eine einfache Rechteverwaltung kann hier mit beschrieben werden. Für eine komplexere Rechteverwaltung ist eher ein eigenes Kapitel empfehlenswert.  

##Anwender  
##### User 
upload+ download+abspielen 

#### Administratoren 
Zugriff auf alles 

#### Servicesaccount 
Zugriff auf Service +Filesystem 

#### Anwendungen		 
Text-to-Speech  
Zugriff auf Filesystem  

#### Output 
Zugriff auf Filesystem 

#### Services 
Backupmanager 
Zugriff auf Filesystem 
API Text2Speech

#### Initiator 
Zugriff auf Filesystem + spricht Text-to-Speech an 


## Zugriffsdiagramm 
Wird nachgereicht 

## Klassenmodell  
Wird nachgereicht 

## Verarbeitungsentitäten  
Wird nachgereicht 

## Datenplausibilität
Es müssen Daten der Datenformaten pdf, docx, odt und txt für den Dateninput gegeben werden. Output ebenfalls in gängigen Format (mp3). Keine weitere Überprüfung nötig. 

## Protokollierung  
Die Protokollierung der technischen und fachlichen Protokolle wird von Jan Friese übernommen. Die Protokolle des Projektmanagements werden von Patrik Gass übernommen. Tägliches Logging durch die Services. 

## Qualitätssicherung  
Modularer Aufbau des Programms, Überprüfung der Formate, Zugriffsrechte, eventuell Zertifikate für Sicherheit 

## Programmierrichtlinien
Modular, Verwendung git, Kommentierung des Quelltextes 

## Test  
Cognitive Workthrough 
Clicktest 
HTML-Test 
Benutzertest 
100 Testfälle mit verschiedenen Texten und Skripten 
  
## Testsysteme
  1.1.23  
  Friese XAMPP-Server   
  22.1.23  
  Friese XAMPP-Server  
  http://audioboox.bplaced.net  
  22.23  
  Gass XAMPP-Server  
  
  
## Operate
Die Anwendung wird bei Verwendung überwacht. Updates der Betriebssysteme findet im 4 Wochen Rhythmus statt. 
Ausnahme bei kritischen Sicherheitslücken dann kurzfristig. Es werden tägliche Backups erstellt, Full Backups am Sonntag, differentielle jeden anderen Tag um 23 Uhr. 
Bei Updates von Audioboox wird eine Mitteilung auf der Seite angezeigt mit geschätzten Wartungszeitraum. 

## Monitor
Die Anwendung Scom überwacht unsere verwendete Struktur. 
Sie versendet automatische E-Mail Notifikationen an das Team, wenn Probleme auftreten mit dem Rang Fehler oder höher. 
Zur Überwachung werden Regeln definiert.
  
 

