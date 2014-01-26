<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <link rel="stylesheet" href="style.css" type="text/css" />

        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <title>MetaGame Forum</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article data-role="content">
                <p id="path"> Home > Forum </p>

                <ul data-role="listview" data-inset="true" data-divider-theme="b">
                    <li data-role="list-divider" id="MainTopic">Main Forum</li>
                    <li><a href="#">
                        <img src="img/iconeforum/Icona_Saluti.png" id="imageTopic">
                        <h2>Saluti e Presentazioni</h2>
                        <p>Angolo dedicato a ...</p></a>
                    </li>
                    <li><a href="#">
                        <img src="img/iconeforum/Icona_FAQ.png" id="imageTopic">
                        <h2>Regolamento e FAQ</h2>
                        <p>bla bla</p></a>
                    </li>
                    <li data-role="list-divider" id="MainTopic">Giochi</li>
                    <li><a href="forumAC.php">
                        <img src="img/iconeforum/Icona_Assassin.png" id="imageTopic">
                        <h2>Assassin's Creed</h2>
                        <p>uccidi uccidi nasconditi</p></a>
                    </li>
                    <li data-role="list-divider" id="MainTopic">Area Collaboratori</li>
                    <li><a href="#">
                        <img src="img/iconeforum/Icona_WebTeam.png" id="imageTopic">
                        <h2>Web Team</h2>
                        <p>camaleonte cornuto</p></a>
                    </li>
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

</html>
