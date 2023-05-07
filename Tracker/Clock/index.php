<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="../../style/style.css">
  <link rel="stylesheet" href="css/style.css">

  <?php
      $curTime = date("H");
      if ($curTime > "21" or $curTime < "06"){ 
          echo "<title>⌛ Time's running out...</title>";
      } else {
          echo "<title>🕚 How much time do you have left?</title>";
      }
    ?>

  <meta property="og:title" content="🕚 Time Remaining">
  <meta name="twitter:title" content="🕚 Time Remaining">

  <meta name="og:url" content="http://scarian.gay/Tracker/Clock/">
  
  <meta name="description" content="🕚 Your time is running out.... Better make the most of it">
  <meta property="og:description" content="🕚 Your time is running out.... Better make the most of it">
  <meta name="twitter:description" content="🕚 Your time is running out.... Better make the most of it">

  <meta content="#e60707" data-react-helmet="true" name="theme-color" />
  <script type="text/javascript" charset="utf-8">
      let a;
      let time;
      setInterval(() => {
        a = new Date();
        time = a.getHours() + ':' + a.getMinutes() + ':' + a.getSeconds();
        document.getElementById('userTime').innerHTML = time;
      }, 1000);
  </script>
</head>
<?php
  $curTime = date("H");
  if ($curTime > "21" or $curTime < "06"){ 
      echo "<body class='night'>";
  } else {
      echo "<body class='day'>";
  }
?>
<!--
  <main>
    <div class="clock">
      <div class="second hand"></div>
      <div class="minute hand"></div>
      <div class="hour hand"></div>
    </div>
  </main>
-->

  <div class="times">

    <h2>What will <i>you</i> do with the time you have left?</h2>
    <h4><span id="userTime"></span></h4>
    <p style="text-align: center"><a class='ao3' href='/' style="color: #ca1818">Back to Main Page</a></p>

    <div class="life_clock broken_clock">
      <p class="dead name">Joel</p>
      <p class="dead timeLeft_broke"><span class="hourClock">00</span><span class="minClock">00</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Grian</p>
      <p class="red timeLeft"><span class="hourClock">05</span><span class="minClock">28</span></p>
    </div>

    <div class="life_clock broken_clock">
      <p class="dead name">Jimmy</p>
      <p class="dead timeLeft_broke"><span class="hourClock">00</span><span class="minClock">00</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Scott</p>
      <p class="red timeLeft"><span class="hourClock">05</span><span class="minClock">31</span></p>
    </div>

    <div class="life_clock broken_clock">
      <p class="name">Bdubs</p>
      <p class="red timeLeft_broke"><span class="hourClock">??</span><span class="minClock">??</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Martyn</p>
      <p class="red timeLeft"><span class="hourClock">05</span><span class="minClock">02</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Tango</p>
      <p class="red timeLeft"><span class="hourClock">02</span><span class="minClock">57</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Etho</p>
      <p class="red timeLeft"><span class="hourClock">01</span><span class="minClock">50</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Pearl</p>
      <p class="red timeLeft"><span class="hourClock">05</span><span class="minClock">28</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Impulse</p>
      <p class="red timeLeft"><span class="hourClock">03</span><span class="minClock">27</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Cleo</p>
      <p class="red timeLeft"><span class="hourClock">03</span><span class="minClock">57</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Scar</p>
      <p class="red timeLeft"><span class="hourClock">01</span><span class="minClock">34</span></p>
    </div>

    <div class="life_clock">
      <p class="name">Bigb</p>
      <p class="red timeLeft"><span class="hourClock">03</span><span class="minClock">57</span></p>
    </div>

    <div class="life_clock broken_clock">
      <p class="dead name">Skizz</p>
      <p class="dead timeLeft_broke"><span class="hourClock">00</span><span class="minClock">00</span></p>
    </div>


</div>


</body>
</html> 