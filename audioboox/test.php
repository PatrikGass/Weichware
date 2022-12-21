 <head>

    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />

    <script defer src="https://pyscript.net/latest/pyscript.js"></script>


  </head>

    <py-script>

	

        language = "de"

        tts = gTTS(text = "das ist ein kleiner test", lang = language, slow = false)

        tts.save("testaudio/tts.mp3")

        playsound("testaudio/tts.mp3")

    </py-script>