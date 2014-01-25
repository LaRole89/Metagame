<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">

        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

                <link rel="stylesheet" href="style.css" type="text/css" />

        
        <title>MetaGame Forum: Assassin's Creed</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article data-role="content">
              <ul data-role="listview" data-inset="true" data-divider-theme="b">
                <li data-role="list-divider" id="MainTopic">
                    Assassin's Creed
                    <a href="forumNuovoTopic.php" >
                      <p class="ui-li-count" id="bottoneNuovoForum">
                        Nuovo Topic
                      </p>
                    </a>
                </li>
                  <li><a href="#">
                    <h2>AC Tips and Tricks</h2>
                    <p>Alcuni "trucchetti" utili per sopravvivere nelle ombre</p>
                      <p class="ui-li-aside" id="infoTopic">inviato da: <strong>LaRole</strong><br>in data: <strong>20/01/14 18:24</strong></p>
                    </a>
                  </li>

                  <li><a href="forumACTopic.php">
                    <h2>AC Liberation HD, Gameplay della Beta</h2>
                    <p>In anteprima per voi!!! surprise surprise!!!</p>
                      <p class="ui-li-aside" id="infoTopic">inviato da: <strong>Gabo92</strong><br>in data: <strong>17/01/14 9:12</strong></p>
                    </a>
                  </li>

                  <li><a href="#">
                    <h2>Risolto Problema Login Ubisoft</h2>
                    <p>Finalmente ce l'ho fatta, ecco come..</p>
                      <p class="ui-li-aside" id="infoTopic">inviato da: <strong>Mat</strong><br>in data: <strong>27/12/13 23:47</strong></p>
                    </a>
                  </li>

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