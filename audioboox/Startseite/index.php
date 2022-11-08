<!DOCTYPE html>
<html lang="de">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Stylesheet/design.css">
</head>

<body>
<style>
h1 {
      float: middle;
      width: 100%;
      padding: 10px;
      background-color: rgb(231, 231, 231);
      border-radius: 25px;
      text-align: center;
      font-size:70px;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      border-style: double;
      border-width: 1px;
      border-color: black;}

h2 {
      float: middle;
      width: 100%;
      padding: 10px;
      background-color: rgb(231, 231, 231);
      border-radius: 25px;
      text-align: center;
      font-size:40px;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

h3 {

      text-align: left;
      font-size:30px;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }      

p{
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 18px;

}
</style>


<!-- Einführung in Audioboox-->
<h1>Audioboox</h1>
<br>
<h3> Was ist Audioboox?</h3>
<details>
<summary class="task" >Hier aufklappen</summary>
<p> Audioboox bietet für alle, die gerne Hörbücher, die optimale Lösung zum Erstellen von
  eigenen Hörbüchern. Wähle einfach ein PDF aus und wir kümmern uns um den Rest.<br>
  </p>
</details>



<!-- Button um neues Audioboox zu erstellen, Weiterleitung zu CreateAudioboox/index.php-->
<input class="buttons"  type="button" onclick="window.location.href='http://localhost/audioboox/CreateAudioboox/index.php';" 
value="Neues Audioboox erstellen"/>


<!-- Erstellung des der Spalten (im stylesheet design.css) -->
<div class="row">
<!-- Erstellung der Säulen (Phasen) des Kanban Boards (im stylesheet design.css) -->
  <div class="column">
    <h2>Backlog</h2>

    <?php
      //Zählung der Dateien im Ordner $directory1 für Nummerierung der Tasks
      $directory1 = "../task/alltasks/backlog/";
      $filecount1 = 0;
      $files1 = glob($directory1 . "*");
      if ($files1){
      $filecount1 = count($files1);
      };
      for($i=0; $i<$filecount1; $i++){
        //Abdecken von numerischen Lücken, damit numerisch richtige Zahlenfolge
        while(!file_exists("../task/alltasks/backlog/task$i.json")){
          $filecount1++;
          $i++;
        }
        //Auslesen der Zuordnung des Tasks
        $strJsonFileContents = file_get_contents("../task/alltasks/backlog/task$i.json");
        $array1 = json_decode($strJsonFileContents, true);
        //visuelle Darstellung des Tasks (auslesen des arrays)
        ?><div class="task"><?php
        echo "<h3>$array1[1]</h3>"; echo "<br>";
        echo "<b>Beschreibung: </b><br>";
        echo $array1[2]; echo "<br> <br>";
        echo "<b>Bearbeiter: </b><br>";
        echo $array1[3]; echo "<br> <br>";
        echo "<b>Fällig am: </b><br>";
        echo $array1[4]; echo "<br>";
        
        //Button Funktion: Verschieben von Backlog zu Doing/Bearbeitung
        if(isset($_POST["backlogtodoing$i"])) { 
          rename("../task/alltasks/backlog/task$i.json","../task/alltasks/doing/task$i.json");
          ?><META http-equiv="refresh" content="0.5"><?php  
        }
        //Button Funktion: Löschen des Tasks
        if(isset($_POST["deletebacklog$i"])) { 
          unlink("../task/alltasks/backlog/task$i.json");
          ?><META http-equiv="refresh" content="0.5"><?php
        }
        
        
      ?>
      	<form method="post"> 
          <!-- Button erzeugen: Verschieben von Backlog zu Doing/Bearbeitung -->
          <input class="buttons" type="submit" name="backlogtodoing<?php echo htmlspecialchars($i)?>" 
          value='Verschieben zu "Bearbeitung" ->'/>
          <!-- Button erzeugen: Löschen des Tasks -->
          <input class="buttons" type="submit" name="deletebacklog<?php echo htmlspecialchars($i)?>" 
            value='Task löschen'/>
      </form>
      
        
    </div> 
    <?php 
    };
    ?>
    
  </div>

  <div class="column">
    <h2>Bearbeitung</h2>
    <?php
    //selbe Funktionalitäten wie im Backlog bloss mit anderen Namen und Pfaden
    $directory2 = "../task/alltasks/doing/";
    $filecount2 = 0;
    $files2 = glob($directory2 . "*");
    if ($files2){
     $filecount2 = count($files2);
    };

    for($i=0; $i<$filecount2; $i++){
      while(!file_exists("../task/alltasks/doing/task$i.json")){
        $filecount2++;
        $i++;
      }
      $strJsonFileContents = file_get_contents("../task/alltasks/doing/task$i.json");
      $array2 = json_decode($strJsonFileContents, true);

      ?><div class="task"><?php
        echo "<h3>$array2[1]</h3>"; echo "<br>";
        echo "<b>Beschreibung: </b><br>";
        echo $array2[2]; echo "<br> <br>";
        echo "<b>Bearbeiter: </b><br>";
        echo $array2[3]; echo "<br> <br>";
        echo "<b>Fällig am: </b><br>";
        echo $array2[4]; echo "<br>";
      if(isset($_POST["doingtobacklog$i"])) { 
        rename("../task/alltasks/doing/task$i.json","../task/alltasks/backlog/task$i.json");
        ?><META http-equiv="refresh" content="0.5"><?php 
      }
      if(isset($_POST["doingtodone$i"])) { 
        rename("../task/alltasks/doing/task$i.json","../task/alltasks/done/task$i.json");
        ?><META http-equiv="refresh" content="0.5"><?php  
      }
      if(isset($_POST["deletedoing$i"])) { 
        unlink("../task/alltasks/doing/task$i.json");
        ?><META http-equiv="refresh" content="0.5"><?php
      }
      ?>
      <form method="post"> 
        <input class="buttons" type="submit" name="doingtobacklog<?php echo htmlspecialchars($i)?>" 
        value='<- Verschieben zu "Backlog"'/>
        <input class="buttons" type="submit" name="doingtodone<?php echo htmlspecialchars($i)?>" 
        value='Verschieben zu "Abgeschlossen" ->'/>
        <input class="buttons" type="submit" name="deletedoing<?php echo htmlspecialchars($i)?>" 
            value='Task löschen'/>
      </form> 
    </div> <?php
    };

    ?>
  </div>

  <div class="column">
    <h2>Abgeschlossen</h2>
    <?php
    //selbe Funktionalitäten wie im Backlog bloss mit anderen Namen und Pfaden
    $directory3 = "../task/alltasks/done/";
    $filecount3 = 0;
    $files3 = glob($directory3 . "*");
    if ($files3){
     $filecount3 = count($files3);
    };

    for($i=0; $i<$filecount3; $i++){
      while(!file_exists("../task/alltasks/done/task$i.json")){
        $filecount3++;
        $i++;
      }
      $strJsonFileContents = file_get_contents("../task/alltasks/done/task$i.json");
      $array3 = json_decode($strJsonFileContents, true);

      ?>
      <div class="task"><?php
        echo "<h3>$array3[1]</h3>"; echo "<br>";
        echo "<b>Beschreibung: </b><br>";
        echo $array3[2]; echo "<br> <br>";
        echo "<b>Bearbeiter: </b><br>";
        echo $array3[3]; echo "<br> <br>";
        echo "<b>Fällig am: </b><br>";
        echo $array3[4]; echo "<br>";
        if(isset($_POST["donetodoing$i"])) { 
          rename("../task/alltasks/done/task$i.json","../task/alltasks/doing/task$i.json");
          ?><META http-equiv="refresh" content="0.5"><?php
        }
        if(isset($_POST["deletedone$i"])) { 
          unlink("../task/alltasks/done/task$i.json");
          ?><META http-equiv="refresh" content="0.5"><?php
        }


        ?>
        <form method="post"> 
            <input class="buttons" type="submit" name="donetodoing<?php echo htmlspecialchars($i)?>" 
            value='<- Verschieben zu "Bearbeitung"'/>
            <input class="buttons" type="submit" name="deletedone<?php echo htmlspecialchars($i)?>" 
            value='Task löschen'/>
        </form>
      </div> 
      <?php

    };

    ?>
  </div>
  
</div>
</body>

</html>