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
        <title>MetaGame Forum: AC Liberation HD, Gameplay della Beta</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article data-role="content">
                <ul data-role="listview" data-inset="true" data-divider-theme="b">
                  <li data-role="list-divider" id="MainTopic">AC Liberation HD, Gameplay della Beta</li>
                    <li>
                        <div>
                            <div id="schedaUtenteForum">
                                <p>
                                    <a href="forumSchedaGabo92.php"><img src="img/Blog/Gabry.jpg" id="imgblogger"><br>Gabo92</a>
                                    <br>in data: <strong>17/01/14 9:12</strong>
                                </p>
                            </div>

                            <div>
                                <p id="infoTopicMobile">
                                    Inviato da: <strong><a href="forumSchedaGabo92.php">Gabo92</a></strong><br>In data: <strong>17/01/14 9:12</strong><br> 
                                </p>
                                <p>
                                    Ecco in anteprima un piccolo video..<br> 
                                    giusto giusto per mettervi la bava alla bocca XD<br><br>
                                </p>

                                <video controls class="video">
                                    <source src="video/AC Liberation HD Gameplay.mp4" type="video/mp4"/>
                                    Il tuo browser non supporta i video in HTML5
                                </video>
                            </div>
                        </div>
                    </li>
                  </li>

                  <li data-role="list-divider" id="MainTopic">RE: AC Liberation HD, Gameplay della Beta</li>
                    <li>
                        <div>
                            <div id="schedaUtenteForum">
                                <p>
                                    <a href="#"><img src="img/Blog/Bird.jpg" id="imgblogger"><br>Birdie17</a>
                                    <br>in data: <strong>17/01/14 9:23</strong>
                                </p>
                            </div>

                            <div>
                                <p  id="infoTopicMobile">
                                    Inviato da: <strong><a href="#">Birdie17</a></strong><br>In data: <strong>17/01/14 9:23</strong><br> 
                                </p>
                                <p id="articoloForum">
                                    Bello bello..anzi bellissimo!!!!<br> 
                                    non vedo l'ora o.O !!!<br><br>
                                </p>
                            </div>
                        </div>
                    </li>
                  </li>
                  <li data-role="list-divider" id="MainTopic">RE: AC Liberation HD, Gameplay della Beta</li>
                    <li>
                        <div>
                            <div id="schedaUtenteForum">
                                <p>
                                    <a href="#"><img src="img/Blog/Diego.jpg" id="imgblogger"><br>LaRole</a>
                                    <br>in data: <strong>17/01/14 9:42</strong>
                                </p>
                            </div>

                            <div>
                                <p  id="infoTopicMobile">
                                    Inviato da: <strong><a href="#">LaRole</a></strong><br>In data: <strong>17/01/14 9:42</strong><br> 
                                </p>
                                <p id="articoloForum">
                                    GGWP Gabo...!!<br> 
                                </p>
                            </div>
                        </div>
                    </li>
                  </li>
                  <li data-role="list-divider" id="MainTopic">RE: AC Liberation HD, Gameplay della Beta</li>
                    <li>
                        <div>
                            <div id="schedaUtenteForum">
                                <p>
                                    <a href="forumSchedaGabo92.php"><img src="img/Blog/Gabry.jpg" id="imgblogger"><br>Gabo92</a>
                                    <br>in data: <strong>18/01/14 14:43</strong>
                                </p>
                            </div>

                            <div>
                                <p  id="infoTopicMobile">
                                    Inviato da: <strong><a href="forumSchedaGabo92.php">Gabo92</a></strong><br>In data: <strong>18/01/14 14:43</strong><br> 
                                </p>
                                <p id="articoloForum">
                                    Grazie ragazzi!!!! <3 :)<br> 
                                </p>
                            </div>
                        </div>
                    </li>
                  </li>
                </ul>

                
                <ul data-role="listview" data-inset="true" data-divider-theme="b">
                    <li data-role="list-divider" id="MainTopic">Rispondi al Topic</li>
                        <li >
                            <input type="text" name="name" value="" data-clear-btn="true">
                            <div id="bottoneForum">
                                <input type="button" value="Rispondi">
                            </div>

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