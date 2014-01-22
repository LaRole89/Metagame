<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

        <title>MetaGame: Blog</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>


        <div id="conteinerBlogger"><!--div grande-->
            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="BlogDiego.php"><img src="img/Blog/Diego.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 24<br>
                    gioco preferito: League of Legends<br>
                    ruolo: mid<br><br>
                </div>
                <a href="BlogEvidenzaDiego.php">Tutti possono arrivare in Diamond</a>
            </div>
                
            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="*"><img src="img/Blog/Gabry.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 21<br>
                    gioco preferito: League of Legends<br>
                    ruolo: feeder<br><br>
                </div>
                <a href="*">blog in evidenza Gabry</a>
            </div>

            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="*"><img src="img/Blog/Lore.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 23<br>
                    gioco preferito: League of Legends<br>
                    ruolo: unknown<br><br>
                </div>
                <a href="*">blog in evidenza Lore</a>
            </div>

            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="*"><img src="img/Blog/Bird.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 23<br>
                    gioco preferito: Dota 2<br>
                    ruolo: unknown<br><br>
                </div>
                <a href="*">blog in evidenza Bird</a>
            </div>

            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="*"><img src="img/Blog/Deb.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 21<br>
                    gioco preferito: Rompere<br>
                    ruolo: stress tester<br><br>
                </div>
                <a href="*">blog in evidenza Deb</a>
            </div>

            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="*"><img src="img/Blog/Mat.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 23<br>
                    gioco preferito: League of Legends<br>
                    ruolo: Support<br><br>
                </div>
                <a href="*">blog in evidenza Mat</a>
            </div>
        
        </div>


        <?php
        include 'footer.php';
        ?>

        </div>
        <?php
        include 'pagemobile.php';
        ?>
    </body>

</html>