<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
        echo "please work. agh. pain <br>";
        $xmlDoc = new DOMDocument();
        $xmlDoc->load("feed.atom");

        $fics = $dom->getElementsByTagName('entry'); 

        foreach ($fics as $fic){
          echo $fic;
          echo "<br>";
        }

        
    ?>
  </body>
</html>