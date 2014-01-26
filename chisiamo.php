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
        <title>Chi Siamo</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article >
                <p id="path"> Home > Chi Siamo  </p>
                <h1>Chi Siamo</h1>
                <p>
                    Eccoci, è il tempo delle presentazioni...<br>
                    Noi siamo il Gruppo GGWP dell'università di Venezia Ca'Foscari<br><br>

                    Se hai problemi, dubbi o domande, <a href="contatti.php"> clicca qui</a><br>
                    Social First, <a href="social.php"> eccoci</a><br>
                    Vuoi scoprire i nostri punti vendta associati? <a href="puntivendita.php"> clicca qui</a><br><br><br>
                </p>   
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