#!C:\xampp\htdocs\Weichware\Python\python.exe
from gtts import gTTS
import playsound
import os
print("Content-Type: text/html\n\n")
print("Hello world! Python works!")
language = "de"
tts = gTTS(text = "das ist ein kleiner test", lang = language, slow = False)
tts.save('text.mp3')
playsound.playsound("text.mp3")
