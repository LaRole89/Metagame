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
        <title>Blog: Diego</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>

        <div id="conteinerBlog">

            <div id="SchedaBlogger"><!--scheda blogger-->
                <div style="float:left";><a href="BlogDiego.php"><img src="img/Blog/Diego.jpg" id="imgblogger"></a></div>
                <div id="datiblogger">
                    età: 24<br>
                    gioco preferito: League of Legends<br>
                    ruolo: mid<br><br>
                </div>
                Numero Follower: 273
            </div>

            <br><br>

            <a href="BlogEvidenzaDiego.php"><b>Tutti possono arrivare in Diamond</b></a><br>
            Tutti possono arrivare a Diamond, no excuse, ecco i miei personali consigli su come
            <a href="BlogEvidenzaDiego.php">...</a>

            <br><br>

            <a href="*"><b>Season 4 è ufficialmente aperta!!!</b></a><br>
            Da oggi, 20 gennaio, è iniziata la nuova season, tra i cambiamenti abbiamo
            <a href="*">...</a>

            <br><br>

            <a href="*"><b>Come Carriare in LOL </b></a><br>
            "Carriare", questo sconosciuto
            <a href="*">...</a>

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