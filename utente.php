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

        <title>MetaGame: Utente</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
                <p id="path"> Home > Utente </p>
                <h1>
                Utente
                </h1>
                <!--<div class="scheda"></div>-->
                <div id="contenitore">
                    <img src="img/Blog/Gabry.jpg" id="utente"/> <br/>
                    <div id="info"> 
                        <h2>Nome:</h2> Gabriele <br /><br />
                        <h2>Cognome:</h2> Volpato <br /><br />
                        <h2>Nickname:</h2> Gabo <br /><br />
                        <h2>Indirizzo:</h2> via Gobbi 305 <br /><br />
                        <h2>Città:</h2> Mestre <br /><br />
                        <h2>CAP:</h2> 30173 <br />
                        <div id="bottoni">
                            <button>Modifica dati</button>
                            <button>Vai al carrello</button>
                        </div>
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
