<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--css -->
          <link rel="stylesheet" href="style.css" type="text/css" />
          <link rel="stylesheet" href="newstyle.css" type="text/css" />
        <!-- jquery e jquery mobile -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/latest/jquery.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>

        <title>MetaGame: Blog</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>


        <article><!--div grande-->
            <p id="path"> Home > Blog </p>
            <div id="conteinerCenter">
                <h1>
                I nostri Blogger
                </h1>
                
                <div class="scheda">                    
                    <div id="tagcloud">
                        <a href="#" id="tag2">Assassin's Creed</a>
                        <a href="#" id="tag1">Connor</a>
                        <a href="#" id="tag1">Dead Space 3</a>
                        <a href="#" id="tag1">Diamond</a>
                        <a href="#" id="tag1">Ezio</a>
                        <a href="#" id="tag3">Jungle</a>
                        <a href="#" id="tag3">League of Legends</a>
                        <a href="tagLOL.php" id="tag4">LOL</a>
                        <a href="#" id="tag1">Season 4</a>
                    </div>
                    <div id="hotlink"><a href="#">tag-cloud</a></div>
                </div>
                <br/>
            <!--schede BLOGGHER-->
                <div class="scheda">
                    <div id="schedaimg"><a href="blogDiego.php"><img src="img/Blog/Diego.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Demon Ray</h1>
                        <h2>Età:</h2> 25<br/>
                        <h2>Game:</h2> ALL<br/>
                        <h2>Ruolo:</h2> OP
                    </div>
                    <div id="hotlink"><a href="blogEvidenzaDiego.php">blog in evidenza Diego</a></div>
                </div>
            
                <div class="scheda">
                    <div id="schedaimg"><a href="#"><img src="img/Blog/Gabry.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Gabo92</h1>
                        <h2>Età:</h2> 21<br/>
                        <h2>Game:</h2> COD4<br/>
                        <h2>Ruolo:</h2> feeder
                    </div>
                    <div id="hotlink"><a href="#">blog in evidenza Gabry</a></div>
                </div>
                
                <div class="scheda">
                    <div id="schedaimg"><a href="#"><img src="img/Blog/Lore.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Butan</h1>
                        <h2>Età:</h2> 23<br/>
                        <h2>Game:</h2> Space3<br/>
                        <h2>Ruolo:</h2> unknown
                    </div>
                    <div id="hotlink"><a href="#">blog in evidenza Lore</a></div>
                </div>

              <div class="scheda">
                    <div id="schedaimg"><a href="#"><img src="img/Blog/Bird.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Bird</h1>
                        <h2>Età:</h2> 23<br/>
                        <h2>Game:</h2> Dota 2<br/>
                        <h2>Ruolo:</h2> unknown
                    </div>
                    <div id="hotlink"><a href="#">blog in evidenza Bird</a></div>
                </div>

               <div class="scheda">
                    <div id="schedaimg"><a href="#"><img src="img/Blog/Deb.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>DEB Basta!</h1>
                        <h2>Età:</h2> 21<br/>
                        <h2>Game:</h2> Rompere<br/>
                        <h2>Ruolo:</h2> stress tester
                    </div>
                    <div id="hotlink"><a href="#">blog in evidenza Deb</a></div>
                </div>

              <div class="scheda">
                    <div id="schedaimg"><a href="#"><img src="img/Blog/Mat.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Agareth</h1>
                        <h2>Età:</h2> 23<br/>
                        <h2>Game:</h2> LOL<br/>
                        <h2>Ruolo:</h2> Support
                    </div>
                    <div id="hotlink"><a href="#">blog in evidenza Matt</a></div>
              </div>
            
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