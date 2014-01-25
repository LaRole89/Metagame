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
            <p id="path"> Home > Offerte > Le nostre offerte</p>
            <div id="conteinerCenter">
                <h1>
                Le nostre offerte
                </h1>
                     <div class="scheda">
                        <div id="schedaimg"><a href="schedaprodotto.php"><img src="img/giochi/AC4.jpg" /></a></div>
                        <div id="schedadati">
                            <h1>60 euro</h1>
                            <h2>60 euro:</h2>60 euro<br/>
                            <h2>60 euro:</h2>60 euro<br/>
                            <h2>60 euro:</h2>60 euro
                        </div>
                        <div id="hotlink"><a style="margin-top: 4px;" href="carrello.php"><img src="img/iconacarrello.png" />&nbsp; &nbsp; &nbsp; <img src="img/iconapiu.png" />&nbsp; <img src="img/iconaform.png" /><img src="img/iconameno.png" /></a></div>
                    </div>
                    <div class="scheda">
                        <div id="schedaimg"><a href="#"><img src="img/giochi/AC4.jpg" /></a></div>
                        <div id="schedadati">
                            <h1>60 euro</h1>
                            <h2>60 euro:</h2>60 euro<br/>
                            <h2>60 euro:</h2>60 euro<br/>
                            <h2>60 euro:</h2>60 euro
                        </div>
                        <div id="hotlink"><a style="margin-top: 4px;" href="carrello.php"><img src="img/iconacarrello.png" />&nbsp; &nbsp; &nbsp; <img src="img/iconapiu.png" />&nbsp; <img src="img/iconaform.png" /><img src="img/iconameno.png" /></a></div>
                    </div>
                    <div class="scheda">
                        <div id="schedaimg"><a href="#"><img src="img/giochi/AC4.jpg" /></a></div>
                        <div id="schedadati">
                            <h1>60 euro</h1>
                            <h2>60 euro:</h2>60 euro<br/>
                            <h2>60 euro:</h2>60 euro<br/>
                            <h2>60 euro:</h2>60 euro
                        </div>
                        <div id="hotlink"><a style="margin-top: 4px;" href="carrello.php"><img src="img/iconacarrello.png" />&nbsp; &nbsp; &nbsp; <img src="img/iconapiu.png" />&nbsp; <img src="img/iconaform.png" /><img src="img/iconameno.png" /></a></div>
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
