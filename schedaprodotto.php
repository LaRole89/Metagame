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
        <title></title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
                <p id="path"> Home > Shop > SCHEDA PRODOTTO </p>
                <div id="conteinerCenter">
                <h1>
                Assassin's Creed
                </h1>
                <img src="img/giochi/AC4.jpg" id="cover">
                <div id = dati>
                    <h3>Genere:</h3> Action/Adventure<br/><br/>
                    <h3>Versione:</h3> PAL - ITA<br/><br/>
                    <h3>Supporto:</h3> Blu-Ray<br/><br/>
                    <h3>Giocatori:</h3> 1<br/><br/>
                    <h3>Online:</h3> Possibile<br/><br/>
                    <h3>Voto:</h3> <img src="img/stellevalutazione.png"/><br/>
                </div>
                <br/><br/>
                <h2>
                    Descrizione
                </h2>
                <p id="descrizione">
                    Corre l’anno 1715. I Caraibi sono sotto il controllo dei pirati che hanno fondato una vera e propria repubblica, priva però di qualsiasi legge, perciò corruzione, avidità e crudeltà sono all’ordine del giorno. <br />

                    Tra questi fuorilegge vive un giovane ed esuberante capitano di nome Edward Kenway. La sua lotta per conquistare la gloria gli ha fatto guadagnare il rispetto di vere leggende dei mari come il pirata Barbanera, ma lo ha anche trascinato nell’antico conflitto tra Assassini e Templari, una guerra che potrebbe distruggere tutto ciò che i pirati hanno ottenuto. <br />

                    Benvenuto nell’età d’oro dei pirati! <br />
                </p><br/><br/>
                <h2>
                    Trailer
                </h2><br/>
                <video controls class="video">
                    <source src="Video/Assassins Creed 4 black Flag - Cinematic Trailer - da Ubisoft.mp4" type="video/mp4" />
                </video><br/><br/>
                <h2>
                    Video Gameplay
                </h2><br/>
                <video controls class="video">
                    <source src="Video/Assassins Creed 4_ Black Flag (ITA) - Luoghi e attività | Gameplay commentato 10 minuti.mp4" type="video/mp4" />
                    Il tuo browser non supporta i video in HTML5
                </video><br/>
                <a href="gameplay.php">Guarda tutti i video</a>
                <br/><br/>
                <h2>
                    News
                </h2><br/>
                <a href="news.php">Guarda tutte le news</a>
                <br/><br/>
                <h2>
                    Interviste
                </h2><br/>
                <video controls class="video">
                    <source src="Video/Assassins Creed 4 Black Flag Video Intervista Everyeye Network.mp4" type="video/mp4" />
                    Il tuo browser non supporta i video in HTML5
                </video><br/><br/>
                <a href="interviste.php">Guarda tutte le interviste</a><br/><br/>
                <h2>
                    Sondaggi
                </h2>
                <br/>
                <a href="interviste.php">Guarda tutte le interviste</a> <br/>

      
                </div>
            </article>
        
        <?php
        include 'footer.php';
        ?>    
        </div>
  
        
        <div data-role="page" id="menuphone">
                menu
        </div>
        <div data-role="page" id="searchpage">
            search
        </div>
        <div data-role="page" id="loginpage">
            login
        </div>
    </body>

</html>