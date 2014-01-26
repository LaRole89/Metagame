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
        <title>Chi Siamo: Social</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article >
                <p id="path"> Home > Chi Siamo > Social </p>
                <h1>Social</h1>
                <div id="conteinerCenter">
                    <a href="https://www.facebook.com/"><img src="img/social/Scheda_Facebook.jpg"></a>
                    <a href="https://twitter.com/"><img src="img/social/Scheda_Twitter.jpg"></a>
                    <a href="http://www.google.com/intl/it_ALL/+/learnmore/"><img src="img/social/Scheda_Google+.jpg"></a><br><br><br>
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