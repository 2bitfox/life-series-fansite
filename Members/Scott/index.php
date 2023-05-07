<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>💛 Scott</title>

    <link rel="stylesheet" href="../../style/style.css">
    <script src="https://kit.fontawesome.com/db0044a29b.js" crossorigin="anonymous"></script>

  </head>
  <?php
        $curTime = date("H");
        if ($curTime > "21" or $curTime < "06"){ 
            echo "<body class='night'>";
        } else {
            echo "<body class='day'>";
        }
    ?>
    <h1 class="user_name"><i class="fa-solid fa-clover"></i> Scott</h1>
    <div class="user_bio">
      <p>
        Bacon ipsum dolor amet beef ribs lorem cupidatat, sunt sausage proident bacon. Elit beef officia ea, corned beef pig in dolore jowl qui nostrud pork loin. Shoulder lorem aute, 
        duis shankle proident tail venison quis kielbasa andouille tempor t-bone mollit bacon. Biltong leberkas ham, landjaeger tenderloin buffalo ad cillum exercitation. Short ribs 
        short loin pig meatloaf kevin irure nisi doner cillum fugiat ham spare ribs.

        Consectetur laboris strip steak ex. Ipsum ullamco anim strip steak aute picanha. Dolore in tempor in commodo, nulla enim occaecat sint sed sirloin aliqua. Spare ribs 
        consectetur ut sunt voluptate. In andouille leberkas, eiusmod pig cow prosciutto excepteur bacon fugiat. Turducken corned beef enim biltong quis.

        Aute bresaola short ribs swine short loin turkey nostrud ham hock anim laborum porchetta reprehenderit. Ribeye veniam excepteur exercitation ullamco minim, meatball filet 
        mignon. Cillum nisi meatloaf aliquip laboris prosciutto elit turducken, in adipisicing id shank. Sed tri-tip incididunt voluptate. Aute ground round chicken ribeye porchetta 
        jerky. Velit proident officia, ham duis eu beef capicola turkey exercitation sed venison hamburger bacon. Pariatur sirloin esse labore sunt.
      </p>

      <h3> <a href="https://www.youtube.com/playlist?list=PLh4_JC5Ca09tD1rvcTNaH10C-sCTVKmuT" target="_blank"><i class="fa-solid fa-user"></i> Third Life </a> </h3>
      <p>
        Scott teamed with Jimmy in Third Life.
      </p>

      <h3> <a href="https://www.youtube.com/playlist?list=PLh4_JC5Ca09sQYkkpQgW85v1O9m_uzE7r" target="_blank"><i class="fa-solid fa-heart-circle-plus"></i> Last Life </a> </h3>
      <p>
        In Last Life, Scott teamed with Pearl and later, Cleo.
      </p>

      <h3> <a href="https://www.youtube.com/playlist?list=PLh4_JC5Ca09smTxaMeo8eYbK4KexdjjXD" target="_blank"><i class="fa-solid fa-shield-heart"></i> Double Life </a> </h3>
      <p>
        In Double Life, Scott was paired with Pearl, but teamed with Cleo instead.
      </p>

      <h3> <a href="https://www.youtube.com/@Dangthatsalongname/videos" target="_blank"><i class="fa-solid fa-hourglass-start"></i> Limited Life </a> </h3>
      <p>
        In Limited Life, Scott teamed with Martyn.
      </p>


    </div>

  </body>
</html>