#!C:\xampp\htdocs\Weichware\Python\python.exe
print("Content-Type: text/html\n\n")

from gtts import gTTS
from PyPDF2 import PdfReader

print("Test if Python works") #Python Umgebung Test

reader = PdfReader("C:/Users/Patrik/Downloads/Borderstep_Rechenzentren2021.pdf") #Pfad zum PDF

page = reader.pages[0] #Liste von Objekten hier
parts = []

def visitor_body(text, cm, tm, fontDict, fontSize): #Kopf und Fusszeile entfernen
    y = tm[5]
    if y > 50 and y < 720:
        parts.append(text)

totalpages = len(reader.pages) #Anzahl der Seiten
print(totalpages)

page.extract_text(visitor_text=visitor_body) #Text extrahieren
text_body = "".join(parts)
print(text_body)

language = "de"
tts = gTTS(text = text_body, #Text zu Sprache, vlt durch pyttsx3 ersetzen
    lang = language,
    slow = False)
tts.save("audioboox.mp3") #mp3 Speichern (dauert einige Sekunden)
