<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style> 
      /* Stylesheet für Drag Drop*/
      .upload-container {
        position: relative;
      }
      .upload-container input {
        border: 1px solid #92b0b3;
        background: #f1f1f1;
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;
        padding: 100px 0px 100px 250px;
        text-align: center !important;
        width: 500px;
      }
      .upload-container input:hover {
        background: #ddd;
      }
      .upload-container:before {
        position: absolute;
        bottom: 50px;
        left: 245px;
        content: " (or) Drag and Drop files here. ";
        color: #3f8188;
        font-weight: 900;
      }
      .upload-btn {
        margin-left: 300px;
        padding: 7px 20px;
      }
    </style>
  </head>

  <body>
      <!-- File Chooser/Drag Drop-->
  <div class="upload-container">
      <input type="file" id="file_upload" multiple accept=".pdf"/>
    </div>
      <!-- Text Input falls notwendig-->
  <form>
    <input type="text" id="textid" name="text"><br>
    <input type="submit" onclick="changetext()">
  </form>

  <!--Auswahl Stimme -->
  <select id="voiceSelect"></select>

  <!--Navigations Buttons -->
  <button onclick="stopaudio()" type="button" id="stop">stop</button>
  <button onclick="pauseaudio()" type="button" id="pause">pause</button>
  <button onclick="playaudio()" type="button" id="play">play</button>


<script>
  //File Chooser/Drag Drop Funktion
 function uploadFiles() {
        var files = document.getElementById('file_upload').files;
        if(files.length==0){
          alert("Please first choose or drop any file(s)...");
          return;
        }
        var filenames="";
        for(var i=0;i<files.length;i++){
          filenames+=files[i].name+"\n";
        }
        alert("Selected file(s) :\n____________________\n"+reader.readAsDataURL(filenames));
      }

  //Auswahl Stimmen Funktion (noch nicht funktionsfähig)
  function populateVoiceList() {
  if (typeof speechSynthesis === 'undefined') {
    return;
  }

  const voices = speechSynthesis.getVoices();

  for (let i = 0; i < voices.length; i++) {
    const option = document.createElement('option');
    option.textContent = `${voices[i].name} (${voices[i].lang})`;

    if (voices[i].default) {
      option.textContent += ' — DEFAULT';
    }

    option.setAttribute('data-lang', voices[i].lang);
    option.setAttribute('data-name', voices[i].name);
    document.getElementById("voiceSelect").appendChild(option);
  }
}

populateVoiceList();
if (typeof speechSynthesis !== 'undefined' && speechSynthesis.onvoiceschanged !== undefined) {
  speechSynthesis.onvoiceschanged = populateVoiceList;
}

  //TTS Funktion
  var synth = window.speechSynthesis; //speechSynthesis?
  function changetext(){
  var temp = document.getElementById('textid').value;
  alert(temp);
  }
  var msg = new SpeechSynthesisUtterance('Hallo das ist ein Test'); //Hier Input der gesagt wird ###############
	msg.rate = 0.8; // 0.1 to 10
	msg.pitch = 1; //0 to 2

  //Navigationsbutton Funktion
  function stopaudio(){
  synth.cancel()
  }

  function pauseaudio(){
  synth.pause()
  }

  function playaudio(){
  if(synth.pending === false){
    synth.speak(msg);
  }
  else{
    synth.resume()
  }
  }



</script>

  </body>

</html>
