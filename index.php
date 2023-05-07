<!doctype html>
<html>
<head>

    <?php
            $curTime = date("H");
            if ($curTime > "21" or $curTime < "06"){ 
                echo "<title>💤 We'll be back</title>";
            } else {
                echo "<title>💛 Third Life</title>";
            }
    ?>

  <meta property="og:title" content="💛 'Life Series">
  <meta name="twitter:title" content="💛 'Life Series">

  <meta name="og:url" content="http://scarian.gay/">
  
  <meta name="description" content="All about the 'Life Series and the fan content around it.">
  <meta property="og:description" content="All about the 'Life Series and the fan content around it.">
  <meta name="twitter:description" content="All about the 'Life Series and the fan content around it.">
  
  <meta property="og:image" content="banner.png">
  <meta name="twitter:image" content="banner.png">
  <meta name="twitter:card" content="banner.png">

  <meta name="author" content="Fox">

  <meta content="#e60707" data-react-helmet="true" name="theme-color" />

<link rel="stylesheet" href="style/style.css">

</head>
    <?php
        $curTime = date("H");
        if ($curTime > "21" or $curTime < "06"){ 
            echo "<body class='night'>";
        } else {
            echo "<body class='day'>";
        }
    ?>
    <!--CAN I HELP YOU????-->
    <!--why are you snooping. you're not going to get much out of it I use all PHP and you can't find the code this way XD-->
    <!--if you have questions for me on coding send me an email or check w3schools. that's where i teach myself things.-->

    <div class="div3"> 
    <div>

        <div class="parent">
            <div class="div1 blur">
            <?php 
                $imagesDir = 'img/icons/';
                $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                $randomImage = $images[array_rand($images)];

                echo "<img src='" . $randomImage . "' alt=' ' style='height: 40%;'>"

            ?>
            </div>
            <div class="div2 blur"> 
                <!--I will actually loose my mind if I'm right btw.-->
                <!--If you're snooping in my code to figure out how I'm doing this: it's all PHP babey-->
                    <?php
                    $curTime = date("H");
                    $upDate = mktime(06, 00, 00);
    
                    if ($curTime > "21" or $curTime < "06"){ 
                        echo "<h2 class='lyricNight'>goodnight";
                    } else {
                        // $thirdlife=strtotime("8:30:05 AM June 8 2021");
                        // $sinceThirdlife=ceil((time() - $thirdlife)/60/60/24);
                        // echo "<h2 class='lyric'>it has been " . $sinceThirdlife . " days since the finale of thirdlife.";

                        $limllife=strtotime("12:00:00 AM April 14 2023");
                        $untilLimllife=ceil(($limllife - time())/60/60/24);
                        echo "<h2 class='lyric'>limited life will end in {$untilLimllife} days.";
                    }

                    ?>
                </h2> 
            </div>
            <div class="div3 blur"> 
                <!--sorry you can't use this to see content. wait until the time switch XD-->
                <?php

                $curTime = date("H");
                $upDate = mktime(06, 00, 00);

                if ($curTime > "21" or $curTime < "06"){ 
                    echo "<img src='img/sites_closed.png' class='centerImg'>
                    <br>
                    <p style='text-align: center'>what are you doing. sites closed. go home. go to sleep. it'll be back up at " . date("h:ia", $upDate) . " for you to view.</p>
                    <p style='text-align: center'>everyone needs a break sometimes. this is your sign to take one now. now go to sleep, third life will be here in the morning for you to
                    think about more.</p>";

                } else {

                    echo "<p>
                        third life was a short minecraft series based on the concept of every player starting with 3 lives. any time they die, they lose a life, and hitting zero means they're 
                        done with the series. <span style='color: #4bd506'>Green</span> and <span style='color: #f0c412'>Yellow</span> lives play the game like normal, and 
                        <span style='color: #e60707'>Red</span> lives are supposed to try and kill other players.
                    </p>
                    <p>
                        the members of third life were Grian, Scar, Bdubs, Bigb, Impulse, Martyn, Ren, Tango, Etho, Scott, Joel, Skizz, Cleo, and Jimmy. they are listed here in the order they died, starting
                        with who died last and ending with the first out of the series. funnily enough, in all three 'life series so far, Jimmy was the first one to lose all of his lives. 
                        (although, in last life, he lost the fewest lives total - he only had two lives and never gained any from another player)
                    </p>
                    <p>
                        third life is succeeded by <b>last life</b>, <b>double life</b>, and a <s>currently unnammed series that is theorized to be released in March of 2023</s> 
                        this fourth series, called <b>limited life</b> has been released as of 3/3/2023! each version has a different gimmick. 

                    </p>

                    <p style='text-align:center'>
                        <a class='ao3' href='/Members'>You can view the members list here!</a>
                    </p>
                    <h4>last life</h4>

                    <p>last life's gimmick was that each player got a randomized number of lives at the start, anywhere from two to seven, and could trade lives with 
                    each other. this game <i>also</i> introduced the <b>bogeyman</b>, who would be randomly chosen from all <i>non-red</i> players, and would have to kill another player b the end of the
                    session else they'd drop directly to their final life, regardless of their current life count.</p>

                    <p>the members of last life were Scott, Ren, Martyn, Pearl, Joel, Etho, Grian, Cleo, Scar, Bigb, Tango, Bdubs, Lizzie, Impulse, Skizz, Mumbo, and Jimmy.</p>

                    <h4>double life</h4>
                    <p>
                        double life went back to the three lives of third life, <i>however</i>, each player had their life count bound to a soulmate, where they shared health and lives. the 
                        shared healthbar meant that any damage taken by one would also affect the other, and anything that killed one would kill the other. they also did not know who their 
                        soulmate was at the start - they had to find them in the first session.
                    </p>
                    <p>
                        the double life duos were:
                    </p>
                    <ul>
                            <li>Pearl ♡ Scott</li>
                            <li>Martyn ♡ Cleo</li>
                            <li>Bdubs ♡ Impulse</li>
                            <li>Joel ♡ Etho</li>
                            <li>Grian ♡ Scar</li>
                            <li>Bigb ♡ Ren</li>
                            <li>Jimmy ♡ Tango</li>
                    </ul>
                    
                    <h4>limited life</h4>
                    <p>the gimmick of limited life is that lives are time - each player starts with 24 hours, and dying takes one hour from that time. 24-16 hours is a <span style='color: #4bd506'>Green</span> life, 16-8 hours 
                    is a <span style='color: #f0c412'>Yellow</span> life, and 8-0 hours is a <span style='color: #e60707'>Red</span> life. this series also brings back the bogeyman mechanic! 
                    someone who kills when becoming the bogeyman gains an hour back, and the person they killed 
                    looses two hours, and when the bogeyman <i>fails</i> to make a kill, they drop down an entire color.</p>

                    <p>green lives cannot kill other players (unles they're chosen as the bogeyman), yellow lives can kill green lives, and red lives can kill anyone. the incentive
                    to kill someone is that killing another player adds 30 minutes to your timer.</p>

                    You can view each members <a class='ao3' href='/Tracker/Clock'>remaining time</a> on this page! (Updated manually - may not be fully updated
                    right when episodes come out.)

                    <h3>fan-content</h3>
                    <p style='text-align:center'>
                        <a class='ao3' href='/Fan Content'>The fan content section has been moved to its own page!</a>
                    </p>";
                }

                ?>

                <p class="footer">questions for the creator of the site? send an email to <span class="email">fox@empiressmp.gay</span></p>

            </div>

        </div> 

        <?php

            $curTime = date("H");
            $upDate = mktime(06, 00, 00);

            if ($curTime > "21" or $curTime < "06"){ 
                echo "<div class='commentGrid nightHide'>";
            } else {
                echo "<div class='commentGrid'>";
            }
        ?>
            <div class="divInput">

            <div>
                <!-- testimonals form -->
                <br>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h3 style="margin: 0px;">Submit a Comment:</h3><br>
                Name: <input type="text" name="name"><br>
                Comment: <input type="text" name="testimonal"><br>
                <input type="submit" value="Submit">
                </form>

                <?php
                    // define variables and set to empty values
                    $name = $comment = "";
                    $nameErr = $commentErr = "";

                    $servername = ""; //you thought
                    $username = "";
                    $password = "";
                    $dbname = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (empty($_POST["name"])) {
                            $nameErr = "You need to input a name!";
                        }
                        else {
                            $name = test_input($_POST["name"]);
                        }

                        if (empty($_POST["testimonal"])){
                            $commentErr = "You need to add a comment!";
                        }
                        else {
                            $comment = test_input($_POST["testimonal"]);
                        }
                        
                        if (!empty($_POST["testimonal"]) && !empty($_POST["name"]) ) {
                            // database information
                            $conn = new mysqli($servername, $username, $password, $database);

                            $sql = "INSERT INTO empiwckf_scarian.testimonals (User, Comment) VALUES (?, ?)";
                            $stmt= $conn->prepare($sql);
                            $stmt->bind_param("ss", $name, $comment);
                            $stmt->execute();

                            $conn->close();
                        }
                    }

                    function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                    }

                ?>
            </div>

            </div>
            <div class="divComments">

             <!-- show the comments -->
            <div class="comment_section">
                    <?php
                    $servername = "";
                    $username = "";
                    $password = "";
                    $dbname = "";

                    $conn = new mysqli($servername, $username, $password, $database);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $query = "SELECT * FROM empiwckf_scarian.testimonals ORDER BY ID DESC";
                    $result = $conn->query($query);
                    
                    echo "<p class='comments_header'>Testimonals:</p>";
                    echo "<div class='scroll_com'>";
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='comment_box'>";
                        echo "<p class='comment_name'>" . $row["User"] . "<span class='timestamp'>". $row["Time"] ."</span></p>";
                        echo "<p class='comment_body'>" . $row["Comment"] . "</p>";
                        echo "</div>";
                    }
                    echo "</div>";
                    
                    mysql_close(); //Make sure to close out the database connection
                    
                    ?>
                </div>

            </div>
        </div> 

    </div>

<!--grian and wilbur have gay sex btw-->
</body>
</html>
