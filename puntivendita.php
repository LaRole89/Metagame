<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
        
        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

        <link rel="stylesheet" href="style.css" type="text/css" />

        <title>Chi Siamo: Punti Vendita</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
                <p id="path"> Home > Chi Siamo > Punti Vendita </p>
                <div id="conteinerCenter">
                <h1>Punti Vendita</h1>
                <p>
                    Mappa dei punti vendita:
                </p> 

                <div id="infoTopicMobile"><a href="#">ecco il link</a><br></div>
                <div id="infoTopic"><img src="img/mappa.jpg"></div> 
                <br><br><br>
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