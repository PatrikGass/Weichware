#!C:\xampp\htdocs\test\python\python.exe
print("Content-Type: text/html\n\n")

from gtts import gTTS
from PyPDF2 import PdfReader

print("AudioBoox wird konvertiert (hier Werbung ohne Abo)") #Python Umgebung Test

reader = PdfReader("C:/xampp/htdocs/test/uploaded-file/Pitch Deck Weichware.pdf") #Pfad zum PDF

parts = []

totalpages = len(reader.pages) #Anzahl der Seiten 
#print(totalpages) 
def visitor_body(text, cm, tm, fontDict, fontSize): #Kopf und Fusszeile entfernen
    y = tm[5]
    if y > 50 and y < 720:
        parts.append(text)

text_body = "".join(parts)
for i in range(totalpages):
    page = reader.pages[i] #Liste von Objekten der Seiten hier
    page.extract_text(visitor_text=visitor_body) #Text extrahieren
    text_body = "".join(parts)
    print(text_body)


language = "de"
tts = gTTS(text = text_body, #Text zu Sprache, vlt durch pyttsx3 ersetzen
    lang = language,
    slow = False)
tts.save("audiofile/audioboox.mp3") #mp3 Speichern (dauert einige Sekunden)