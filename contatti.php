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
        <title>Chi Siamo: Contatti</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article data-role="content">
                <h1>Contatti</h1>
                <p>
                    Hai problemi? Contatta il servizio clienti <a href="mailto:clientservice@metagame.it"> cliccando qui</a><br>
                    Se hai idee o novità da proporci, contattaci <a href="mailto:ideapoint@metagame.it"> cliccando qui</a><br><br>
                    Contatta i rivenditori <a href="mailto:rivenditori@metagame.it"> cliccando qui</a><br>
                    Contatta gli adetti ai blog <a href="mailto:blog@metagame.it"> cliccando qui</a><br>

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