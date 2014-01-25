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

        <article><!--div grande-->
            <p id="path"> Home > Blog > Blog di Demon</p>
            <div id="conteinerCenter">
                <h1>
                I nostri Blogger
                </h1>
                <div class="scheda">
                    <div id="schedaimg"><a href="#"><img src="img/Blog/Diego.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Demon Ray</h1>
                        <h2>Età:</h2> 25<br/>
                        <h2>Game:</h2> ALL<br/>
                        <h2>Ruolo:</h2> OP
                    </div>
                    <div id="hotlink"><a href="blogEvidenzaDiego.php">blog in evidenza Diego</a></div>
                </div>
                <div class="scheda">                    
                    <div id="schedadati">
                        <h1>TAG</h1>
                    </div>
                    <div id="hotlink"><a href="#">tag-cloud</a></div>
                </div>
                <br/>
                <div class="scheda">
                    <div id="schedadati">
                        <h1>Tutti possono arrivare in Diamond</h1>
                        Tutti possono arrivare a Diamond, no excuse...<br/>
                    </div>
                    <div id="hotlink"><a href="blogEvidenzaDiego.php">vai all'articolo</a></div>
                </div>
                <div class="scheda">
                    <div id="schedadati">
                        <h1>Come Carriare in LOL</h1>
                        "Carriare", questo sconosciuto...<br/>
                    </div>
                    <div id="hotlink"><a href="#">vai all'articolo</a></div>
                </div>   
                <div class="scheda">
                    <div id="schedadati">
                        <h1>Season 4 è ufficialmente aperta!!!</h1>
                        Da oggi, 20 gennaio, è iniziata la nuova season...<br/>
                    </div>
                    <div id="hotlink"><a href="#">vai all'articolo</a></div>
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