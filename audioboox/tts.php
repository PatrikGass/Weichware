<html>
<head>
  </head>
  <body>




    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <input type="file" name="url" accept=".txt">
      <input type="submit" value="Audio abspielen">
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $filename1="./Texte/";
        $filename2 = $_POST['url'];
        echo "Wiedergabe: ".   $filename2;
        $filenamenew=$filename1 . $filename2;
        $f = fopen($filenamenew, 'r');
        $contents = fread($f, filesize($filenamenew));

        $text = $contents;

        $lang = "de";

        // MP3 filename generated using MD5 hash
        // Added things to prevent bug if you want same sentence in two different languages
        $file = md5($lang."?".urlencode($text));

        // Save MP3 file in folder with .mp3 extension
        $file = "audio/" . $file . ".mp3";


        // Check folder exists, if not create it, else verify CHMOD
        if (!is_dir("audio/"))
            mkdir("audio/");
        else
            if (substr(sprintf('%o', fileperms('audio/')), -4) != "0777")
                chmod("audio/", 0777);


        // If MP3 file exists do not create new request
        if (!file_exists($file))
        {
            // Download content
            $mp3 = file_get_contents(
            'https://translate.google.com/translate_tts?ie=UTF-8&tl=de-TR&client=tw-ob&q='.urlencode($text) .'&tl='. $lang .'&total=1&idx=0&textlen='.strlen($text).'5&prev=input');
            file_put_contents($file, $mp3);
        }
}
    ?>
<br>
<audio controls="controls" autoplay="autoplay">
  <source src="<?php echo $file; ?>" type="audio/mp3" />
</audio>
  </body>
</html>
