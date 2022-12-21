from gtts import gTTS
import playsound
import os
language = "de"
tts = gTTS(text = "das ist ein kleiner test", lang = language, slow = False)
tts.save('text.mp3')
playsound.playsound("text.mp3")
