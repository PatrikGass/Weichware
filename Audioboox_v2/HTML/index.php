<!DOCTYPE html>
<html lang="de">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../CSS/style.css">
  </head>
<body>
  <section class="layout">
  <div class="header">  <img src="C:\xampp\htdocs\Weichware\Audioboox_v2\symbol.png"  width="150" height="120" />
    <h1>Willkommen bei Audioboox</h1></div>
  <div class="leftSide">  <nav>
    <ul>
      <li><a class="active" href="#home" onclick="return toggle('pg0')">Home</a></li>
      <li><a href="#Upload" onclick="return toggle('pg1')">Datei Upload</a></li>
      <li><a href="#Audio" onclick="return toggle('pg2')">Audio</a></li>
    </ul>
  </nav></div>
  <div class="body"><div id="pg">
   <div id="pg0" class="pg"> <h2 class="h1"> Home </h2> </div>
   <div id="pg1" class="pg"> <h2 class="h1"> Datei Upload <br></br>
         <input type="file" id="file_upload" multiple accept=".pdf"/>
       </h2> </div>
    <div id="pg2" class="pg"> <h2 class="h1"> Audio </h2> </div></div>
  <div class="footer">4</div>

</section>


<script type="text/javascript">
function toggle(IDS) {
  var sel = document.getElementById('pg').getElementsByTagName('div');
  for (var i=0; i<sel.length; i++) {
    if (sel[i].id != IDS) { sel[i].style.display = 'none'; }
  }
  var status = document.getElementById(IDS).style.display;
  if (status == 'block') { document.getElementById(IDS).style.display = 'none'; }
                    else { document.getElementById(IDS).style.display = 'block'; }

  return false;
}
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

</script>
</body>
</html>
