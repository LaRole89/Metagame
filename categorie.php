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
        <title>MetaGame: Console</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
                <p id="path"> Home > Shop > Categorie </p>
                <div id="conteinerCenter">
                    <h1>
                    Categorie
                    </h1>
                    <a href="giochi.php"> <img src="img/categorie/Scheda_Categoria_Adventure.png" class="catecons"/> </a>
                    <a href="giochi.php"> <img src="img/categorie/Scheda_Categoria_Platform.png" class="catecons"/> </a>
                    <a href="giochi.php"> <img src="img/categorie/Scheda_Categoria_RPG.png" class="catecons"/> </a>
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
