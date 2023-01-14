<?php
   $filename = $_FILES["myfile"]["name"];
   $filesize = $_FILES["myfile"]["size"];
   $tempfile = $_FILES["myfile"]["tmp_name"];
   $filenameWithDirectory = "uploaded-file/".$filename;
?>
<html>
<head>
  
</head>
<body>
<?php
   if(rename($tempfile, "uploaded-file/audioboox.pdf")
      #move_uploaded_file($tempfile, $filenameWithDirectory)
      )
   {
      echo "<h2>File Uploaded</h2>";
      echo "<p>You file is uploaded successfully.</p>";
      echo "<p>File name = <b>$filename</b></p>";
      #echo "<p>File size = <b>$filesize</b></p>";

      echo '<form method="POST" action="http://localhost/test/createaudio2.py">
      <input type="submit" value="AudioBoox erstellen"/>
    </form>';
      
   }
   else 
   {
      echo "Fehler beim Upload der Datei.";
   }
?>
</body>
</html>