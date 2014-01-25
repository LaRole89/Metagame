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
        <title>MetaGame: Sondaggi</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
                <p id="path"> Home > Now > Sondaggi </p>
                <div id="conteinerCenter">
                    <h1>
                    Giochi
                    </h1>
                    <div class="scheda">
                        <div id="schedaimg"><a href="#"><img src="img/giochi/AC4.jpg" /></a></div>
                        <div id="schedadati">
                            <h1>Personaggi</h1>
                            <h2>Iniziato da:</h2>Diego<br/>
                            <h2>Data:</h2>25/3/2013<br/>
                            <h2>Voti:</h2>57
                        </div>
                        <div id="hotlink"><a href="sondaggio.php">Vai al sondaggio</a></div>
                    </div>
                    
                    <div class="scheda">
                        <div id="schedaimg"><a href="#"><img src="img/giochi/AC4.jpg" /></a></div>
                        <div id="schedadati">
                            <h1>Personaggi</h1>
                            <h2>Iniziato da:</h2>Diego<br/>
                            <h2>Data:</h2>25/3/2013<br/>
                            <h2>Voti:</h2>57
                        </div>
                        <div id="hotlink"><a href="sondaggio.php">Vai al sondaggio</a></div>
                    </div>
                    
                    <div class="scheda">
                        <div id="schedaimg"><a href="#"><img src="img/giochi/AC4.jpg" /></a></div>
                        <div id="schedadati">
                            <h1>Personaggi</h1>
                            <h2>Iniziato da:</h2>Diego<br/>
                            <h2>Data:</h2>25/3/2013<br/>
                            <h2>Voti:</h2>57
                        </div>
                        <div id="hotlink"><a href="sondaggio.php">Vai al sondaggio</a></div>
                    </div>
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
