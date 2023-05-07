<!doctype html>
<html>
<head>
    <?php
            $curTime = date("H");
            if ($curTime > "21" or $curTime < "06"){ 
                echo "<title>💤 We'll be back</title>";
            } else {
                echo "<title>🖌️ Fan Content</title>";
            }
    ?>

    <meta property="og:title" content="🖌️ 'Life Series Fan Content">
    <meta name="twitter:title" content="🖌️ 'Life Series Fan Content">

    <meta name="og:url" content="http://scarian.gay/Fan%20Content/">
    
    <meta name="description" content="All about the 'Life Series and the fan content around it.">
    <meta property="og:description" content="All about the 'Life Series and the fan content around it.">
    <meta name="twitter:description" content="All about the 'Life Series and the fan content around it.">
    
    <meta property="og:image" content="../banner.png">
    <meta name="twitter:image" content="../banner.png">
    <meta name="twitter:card" content="../banner.png">

    <meta content="#e60707" data-react-helmet="true" name="theme-color" />

<link rel="stylesheet" href="../style/style.css">
</head>
    <?php
        $curTime = date("H");
        if ($curTime > "21" or $curTime < "06"){ 
            echo "<body class='night'>";
        } else {
            echo "<body class='day'>";
        }
    ?>

    <div class="div3"> 
    <div>

        <div class="parent">
            <div class="div2 blur"> 
                    <?php
                    $curTime = date("H");
                    $upDate = mktime(06, 00, 00);
    
                    if ($curTime > "21" or $curTime < "06"){ 
                        echo "<h2 class='lyricNight'>goodnight";
                    } else {
                        $thirdlife=strtotime("8:30:05 AM June 8 2021");
                        $sinceThirdlife=ceil((time() - $thirdlife)/60/60/24);
                        echo "<h2 class='lyric'>life series fancontent";
                    }

                    ?>
                </h2> 
            </div>
            <div class="div3 blur"> 
                <?php

                    echo "
                    <h3>fan-fiction</h3>
                    <p>
                        third life is by far the most popular of the three series, and within third life scar and grian are the most popular duo.
                    ";

                                        
                    $html = file_get_contents('https://archiveofourown.org/tags/3rd%20Life%20%7C%20Last%20Life%20SMP%20Series/works');
                    $start = stripos($html, '<!--Descriptive page name and system messages, descriptions, and instructions.-->');
                    $end = stripos($html, '</h2>', $offset = $start);
                    $length = $end - $start;
                    $htmlSection = substr($html, $start, $length);


                    $start2 = stripos($htmlSection, "of");
                    $end2 = stripos($htmlSection, 'Works', $offset = $start2);
                    $length2 = $end2 - $start2;
                    $numWorksRAW = substr($htmlSection, $start2, $length2);
                    $numWorks = substr($numWorksRAW, 3);

                    echo "there are currently " . $numWorks . " works in the <a class='ao3' href='https://archiveofourown.org/tags/3rd%20Life%20%7C%20Last%20Life%20SMP%20Series/works'>life series tag</a>
                     on ao3. ";


                    $html = file_get_contents('https://archiveofourown.org/works?commit=Sort+and+Filter&work_search%5Bsort_column%5D=revised_at&include_work_search%5Brelationship_ids%5D%5B%5D=55425495&work_search%5Bother_tag_names%5D=&work_search%5Bexcluded_tag_names%5D=&work_search%5Bcrossover%5D=&work_search%5Bcomplete%5D=&work_search%5Bwords_from%5D=&work_search%5Bwords_to%5D=&work_search%5Bdate_from%5D=&work_search%5Bdate_to%5D=&work_search%5Bquery%5D=&work_search%5Blanguage_id%5D=&tag_id=3rd+Life+%7C+Last+Life+SMP+Series');
                    $start = stripos($html, '<!--Descriptive page name and system messages, descriptions, and instructions.-->');
                    $end = stripos($html, '</h2>', $offset = $start);
                    $length = $end - $start;
                    $htmlSection = substr($html, $start, $length);


                    $start2 = stripos($htmlSection, "of");
                    $end2 = stripos($htmlSection, 'Works', $offset = $start2);
                    $length2 = $end2 - $start2;
                    $numWorksRAW = substr($htmlSection, $start2, $length2);
                    $numWorks = substr($numWorksRAW, 3);

                    echo "filtering this to <a class='ao3' href='https://archiveofourown.org/works?commit=Sort+and+Filter&work_search%5Bsort_column%5D=revised_at&include_work_search%5Brelationship_ids%5D%5B%5D=55425303&work_search%5Bother_tag_names%5D=&work_search%5Bexcluded_tag_names%5D=&work_search%5Bcrossover%5D=&work_search%5Bcomplete%5D=&work_search%5Bwords_from%5D=&work_search%5Bwords_to%5D=&work_search%5Bdate_from%5D=&work_search%5Bdate_to%5D=&work_search%5Bquery%5D=&work_search%5Blanguage_id%5D=&tag_id=3rd+Life+%7C+Last+Life+SMP+Series'>Scar & Grian</a> changes this number to " . $numWorks;

                    
                    $html = file_get_contents('https://archiveofourown.org/works?commit=Sort+and+Filter&work_search%5Bsort_column%5D=revised_at&include_work_search%5Brelationship_ids%5D%5B%5D=55425303&work_search%5Bother_tag_names%5D=&work_search%5Bexcluded_tag_names%5D=&work_search%5Bcrossover%5D=&work_search%5Bcomplete%5D=&work_search%5Bwords_from%5D=&work_search%5Bwords_to%5D=&work_search%5Bdate_from%5D=&work_search%5Bdate_to%5D=&work_search%5Bquery%5D=&work_search%5Blanguage_id%5D=&tag_id=3rd+Life+%7C+Last+Life+SMP+Series');
                    $start = stripos($html, '<!--Descriptive page name and system messages, descriptions, and instructions.-->');
                    $end = stripos($html, '</h2>', $offset = $start);
                    $length = $end - $start;
                    $htmlSection = substr($html, $start, $length);


                    $start2 = stripos($htmlSection, "of");
                    $end2 = stripos($htmlSection, 'Works', $offset = $start2);
                    $length2 = $end2 - $start2;
                    $numWorksRAW = substr($htmlSection, $start2, $length2);
                    $numWorks = substr($numWorksRAW, 3);

                    echo "and filtering this to <a class='ao3' href='https://archiveofourown.org/works?commit=Sort+and+Filter&work_search%5Bsort_column%5D=revised_at&include_work_search%5Brelationship_ids%5D%5B%5D=55425495&work_search%5Bother_tag_names%5D=&work_search%5Bexcluded_tag_names%5D=&work_search%5Bcrossover%5D=&work_search%5Bcomplete%5D=&work_search%5Bwords_from%5D=&work_search%5Bwords_to%5D=&work_search%5Bdate_from%5D=&work_search%5Bdate_to%5D=&work_search%5Bquery%5D=&work_search%5Blanguage_id%5D=&tag_id=3rd+Life+%7C+Last+Life+SMP+Series'>Scar/Grian</a> changes this number to " . $numWorks . " works.</p>";
                
                    $html = file_get_contents('https://archiveofourown.org/works?commit=Sort+and+Filter&work_search%5Bsort_column%5D=revised_at&include_work_search%5Brelationship_ids%5D%5B%5D=78943857&work_search%5Bother_tag_names%5D=&work_search%5Bexcluded_tag_names%5D=&work_search%5Bcrossover%5D=&work_search%5Bcomplete%5D=&work_search%5Bwords_from%5D=&work_search%5Bwords_to%5D=&work_search%5Bdate_from%5D=&work_search%5Bdate_to%5D=&work_search%5Bquery%5D=&work_search%5Blanguage_id%5D=&tag_id=3rd+Life+%7C+Last+Life+SMP+Series');
                    $start = stripos($html, '<!--Descriptive page name and system messages, descriptions, and instructions.-->');
                    $end = stripos($html, '</h2>', $offset = $start);
                    $length = $end - $start;
                    $htmlSection = substr($html, $start, $length);


                    $start2 = stripos($htmlSection, "of");
                    $end2 = stripos($htmlSection, 'Works', $offset = $start2);
                    $length2 = $end2 - $start2;
                    $numWorksRAW = substr($htmlSection, $start2, $length2);
                    $numWorks = substr($numWorksRAW, 3);

                    echo "<p>for a sense of scale, in terms of popular romantic/nonromantic pairings within the fandom as a whole,
                    the next most popular relationship on ao3, <a class='ao3' href='https://archiveofourown.org/works?commit=Sort+and+Filter&work_search%5Bsort_column%5D=revised_at&include_work_search%5Brelationship_ids%5D%5B%5D=78943857&work_search%5Bother_tag_names%5D=&work_search%5Bexcluded_tag_names%5D=&work_search%5Bcrossover%5D=&work_search%5Bcomplete%5D=&work_search%5Bwords_from%5D=&work_search%5Bwords_to%5D=&work_search%5Bdate_from%5D=&work_search%5Bdate_to%5D=&work_search%5Bquery%5D=&work_search%5Blanguage_id%5D=&tag_id=3rd+Life+%7C+Last+Life+SMP+Series'>Scott/Jimmy</a>,
                    has a total of " . $numWorks . " works. this does not account for fics where the pairing is not the main focus. due to limitations of webscraping, this also does not
                    account for fics that require one to be logged in to ao3 to view. the actual fic numbers are higher than the numbers here.</p>";


                ?>

                <h3>fan-art</h3>
                <p> following the trend in fanfiction, fanart shows a preferance for scar & grian (as can be expected, they're the post popular on the series). a quick scroll through 
                    <a class='ao3' href='https://www.tumblr.com/tagged/trafficblr?sort=top'>tumblr tag</a> or the <a class='ao3' href='https://twitter.com/search?q=%23traffictwt'>twitter tag</a> 
                    tells you that much, although its not nearly as extreme of a preferance as is shown in fanfiction. (with the sheer popularity of the life series, fanart can also be found on numerous other
                    social media sites, such as deviantart and instagram, but i don't have direct links to the tags on the those platforms.)
                </p>
                <p>
                    as many smps have examples of, there's plenty of artists making animation, animatics, and fan-songs on youtube for the series.
                </p>
                <p style="text-align: center">
                    <iframe width="330" height="186" src="https://www.youtube.com/embed/ZwTX341DcPw" title="YouTube video player" frameborder="0"></iframe>
                    <iframe width="330" height="186" src="https://www.youtube.com/embed/D9F5FVKG-50" title="YouTube video player" frameborder="0"></iframe>
                    <iframe width="330" height="186" src="https://www.youtube.com/embed/xa6Oypp1RNk" title="YouTube video player" frameborder="0"></iframe>
                    <iframe width="330" height="186" src="https://www.youtube.com/embed/JPevoivAbqA" title="YouTube video player" frameborder="0"></iframe>    
                </p>
                
                <p style="text-align: center"><a class='ao3' href='/'>Back to Main Page</a></p>

                <p class="footer">questions for the creator of the site? send an email to <span class="email">fox@empiressmp.gay</span></p>

            </div>

        </div> 

    </div>

</body>
</html>