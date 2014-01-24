<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="stylesheet" href="stylemio.css" type="text/css" />
        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <title>MetaGame: Giochi</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
                <p id="path"> Home > Shop > Categorie > Giochi </p>
                <h1>
                Giochi
                </h1>
                <div class="containergiochi">
                    <a href="schedaprodotto.php"> <img src="img/giochi/AC4.jpg" class="giochi"/> </a>
                    <p>60 euro</p>
                </div>
                <div class="containergiochi">
                    <a href="schedaprodotto.php"> <img src="img/giochi/Thief.jpg" class="giochi"/> </a>
                    <p>45 euro</p>
                </div>
                <div class="containergiochi">
                    <a href="schedaprodotto.php"> <img src="img/giochi/Killzone.jpg" class="giochi"/> </a>
                    <p>70 euro</p>
                </div>
                <div class="containergiochi">
                    <a href="schedaprodotto.php"> <img src="img/giochi/AC4.jpg" class="giochi"/> </a>
                    <p>60 euro</p>
                </div>
                <div class="containergiochi">
                    <a href="schedaprodotto.php"> <img src="img/giochi/Thief.jpg" class="giochi"/> </a>
                    <p>45 euro</p>
                </div>
                <div class="containergiochi">
                    <a href="schedaprodotto.php"> <img src="img/giochi/Killzone.jpg" class="giochi"/> </a>
                    <p>70 euro</p>
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
