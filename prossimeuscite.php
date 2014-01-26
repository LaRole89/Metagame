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

        <title>MetaGame: Prossime Uscite</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
        
            <article>
            <p id="path"> Home > News > Prossime Uscite</p>
            <div id="conteinerCenter">
                <h1>
                Prossime Uscite
                </h1>
                <div class="scheda">
                    <div id="schedadati">
                        <h1>Assassin's Creed Liberation: annunciata la data d'uscita!</h1>
                        Ubisoft ha annunciato le date ..<br/>
                    </div>
                    <div id="hotlink"><a href="UscitaAC.php">vai all'articolo</a></div>
                </div>
                                <div class="scheda">
                    <div id="schedadati">
                        <h1>Raiden, pronto a scendere sul campo!</h1>
                        SPer tutti gli appassionati di Metal Gear Solid, ecco un ...<br/>
                    </div>
                    <div id="hotlink"><a href="#">vai all'articolo</a></div>
                </div>
                <div class="scheda">
                    <div id="schedadati">
                        <h1>Ubisoft annuncia Assassin's Creed 5</h1>
                        La confraternita degli assassini ti chiama alle armi...<br/>
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
