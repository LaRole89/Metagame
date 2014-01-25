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

        <title>MetaGame Forum: Gabo92</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article data-role="content">
                <ul data-role="listview" data-inset="true" data-divider-theme="b">
                  <li data-role="list-divider" id="MainTopic">Scheda Utente Gabo92</li>
                    <li>
                        <div id="schedaUtenteForum">
                            <p id="datiUtente">
                                <img src="img/Blog/Gabry.jpg" id="imgblogger">
                                <br><strong>Gabo92</strong>
                            </p>
                        </div>
                        <div>
                            <strong>Nome:</strong> Gabriele Volpato<br>
                            <strong>Età:</strong> 21 anni<br>
                            <strong>Data di Nascita:</strong> 14/03/1992<br>
                            <strong>Data di Iscrizione:</strong> 12/09/2013<br>
                            <strong>Follower:</strong> 142<br>
                        </div>
                    </li>
                  </li>

                  <li data-role="list-divider" id="MainTopic">Topic di Gabo92</li>
                    <li><a href="forumACTopic.php">
                        <h2>AC Liberation HD, Gameplay della Beta</h2>
                        <p>in: Assassin's Creed</p>
                            <p class="ui-li-aside" id="infoTopic">in data: <strong>17/01/14 9:12</strong></p>
                        </a>
                    </li>

                    <li><a href="#">
                        <h2>Ciao forum!</h2>
                        <p>in: Saluti e Presentazioni</p>
                        <p class="ui-li-aside" id="infoTopic">in data: <strong>12/09/13 20:02</strong></p>
                        </a>
                    </li>
                  </li>

                  <li data-role="list-divider" id="MainTopic">Topic che ha Commentato Gabo92</li>
                    <li><a href="forumACTopic.php">
                        <h2>RE: AC Liberation HD, Gameplay della Beta</h2>
                        <p>in: Assassin's Creed</p>
                            <p class="ui-li-aside" id="infoTopic">in data: <strong>18/01/14 14:43</strong></p>
                        </a>
                    </li>

                    <li><a href="#">
                        <h2>RE: Risolto Problema Login Ubisoft</h2>
                        <p>in: Assassin's Creed</p>
                        <p class="ui-li-aside" id="infoTopic">in data: <strong>15/01/14 19:27</strong></p>
                        </a>
                    </li>

                    <li><a href="#">
                        <h2>RE: Ciao forum!</h2>
                        <p>in: Saluti e Presentazioni</p>
                        <p class="ui-li-aside" id="infoTopic">in data: <strong>13/09/13 17:26</strong></p>
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
