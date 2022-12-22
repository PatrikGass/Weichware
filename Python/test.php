 <head>

    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />

    <script defer src="https://pyscript.net/latest/pyscript.js"></script>
    <py-config>
      packages = ["gTTS", "playsound"]
    </py-config>
  </head>
<body>
  <py-script>
  from gtts import gTTS
  import playsound
  import os
  language = "de"
  tts = gTTS(text = "das ist ein kleiner test", lang = language, slow = False)
  tts.save('text.mp3')
  </py-script>
</body>
