<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <!--css -->
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>MetaGame: Indice dei contenuti</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
            <?php
            include 'header.php';
            ?>
            <article>
                <p id="path"> Home > Supporto > Indice dei contenuti </p>
                <h1>
                    Indice dei contenuti
                </h1>
                <ul data-role="listview" data-inset="true" data-divider-theme="a">
                    <li data-role="list-divider"> Shop </li>
                            <li> <a href="categorie.php"> Categorie </a> </li>
                            <li> <a href="console.php"> Console </a> </li>                  


                    <li data-role="list-divider"> Offerte </li> 

                            <li> <a href="categorie.php"> Le nostre offerte </a> </li>
                            <li> <a href="console.php"> Offerta del giorno </a> </li>

                    <li data-role="list-divider"> News </li>

                            <li> <a href="categorie.php"> News Giochi </a> </li>
                            <li> <a href="console.php"> News Staff </a> </li>
                            <li> <a href="console.php"> Proddime Uscite </a> </li>

                    <li data-role="list-divider"> Now </li>

                            <li> <a href="sondaggi.php"> Sondaggi </a> </li>
                            <li> <a href="interviste.php"> Interviste </a> </li>
                            <li> <a href="recensioni.php"> Recensioni </a> </li>
                            <li> <a href="gameplay.php"> Video Gameplay </a> </li>

                    <li data-role="list-divider"> Blog </li>
                            <li> <a href="blog.php"> Blog </a> </li>
                    <li data-role="list-divider"> Forum </li>
                            <li> <a href="forum.php"> Forum </a> </li>
                    <li data-role="list-divider"> App Store </li>
                            <li> <a href="#"> App Store </a> </li>
                    <li data-role="list-divider"> Chi Siamo </li>

                            <li> <a href="categorie.php"> Contatti </a> </li>
                            <li> <a href="console.php"> Social </a> </li>
                            <li> <a href="console.php"> Punti vendita </a> </li>

                    <li data-role="list-divider"> Supporto </li>
                            <li> <a href="faq.php"> F.A.Q. </a> </li>
                            <li> <a href="mappa.php"> Mappa del sito </a> </li>
                            <li> <a href="indicecontenuti.php"> Indice dei contenuti </a> </li>

                    <li data-role="list-divider"> Lavora con noi </li>

                            <li> <a href="categorie.php"> Diventa Blogger </a> </li>
                            <li> <a href="console.php"> Diventa Rivenditore </a> </li>
                            
                    <li data-role="list-divider"> Area Riservata </li>

                            <li> <a href="categorie.php"> Profilo </a> </li>
                            <li> <a href="console.php"> Carrello </a> </li>
                </ul>


            </article>

            <?php
            include 'footer.php';
            ?>    
        </div>


        <?php
        include 'pagemobile.php';
        ?>
    </body>