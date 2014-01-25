<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <!--css -->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>MetaGame: Video Gameplay</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
            <?php
            include 'header.php';
            ?>
            <article>
                <p id="path"> Home > Now > Recensioni </p>
                <div id="contenitore">
                    <h1>
                        Recensioni
                    </h1>
                    <h2>Assassin's Creed 4: Luoghi e attività</h2><br/><br/>
                    <video controls class="video">
                        <source src="Video/Assassins Creed 4_ Black Flag (ITA) - Luoghi e attività | Gameplay commentato 10 minuti.mp4" type="video/mp4" />
                        Il tuo browser non supporta i video in HTML5
                    </video><br/><br/>
                    <h2>Assassin's Creed 4: Demo ufficiale gameplay E3 2013</h2><br/><br/>
                    <video controls class="video">
                        <source src="Video/Demo ufficiale di Gameplay - E3 2013 | Assassins Creed 4 Black Flag [IT].mp4" type="video/mp4" />
                        Il tuo browser non supporta i video in HTML5
                    </video><br/><br/>
                    <h2>Assassin's Creed 4: Gameplay</h2><br/><br/>
                    <video controls class="video">
                        <source src="Video/PS4 - Assassins Creed IV Black Flag [Gameplay Ita].mp4" type="video/mp4" />
                        Il tuo browser non supporta i video in HTML5
                    </video>
                </div>
            </article>

            <?php
            include 'footer.php';
            ?>    
        </div>


        <?php
        include 'pagemobile.php';
        ?>
    </body>

</html>
