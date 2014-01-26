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
            <p id="path"> Home > Blog > Blog Diego</p>
            <div id="conteinerCenter">
                <h1>
                Tag: Jungle
                </h1>
            
            <!--schede BLOGGHER-->
                <div class="scheda">
                    <div id="schedaimg"><a href="blogDiego.php"><img src="img/Blog/Diego.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Demon Ray</h1>
                        <h2>Età:</h2> 25<br/>
                        <h2>Game:</h2> ALL<br/>
                        <h2>Ruolo:</h2> OP
                    </div>
                    <div id="hotlink"><a href="#">Come Carriare in LOL</a></div>
                </div>
            
                <div class="scheda">
                    <div id="schedaimg"><a href="blogDiego.php"><img src="img/Blog/Diego.jpg" /></a></div>
                    <div id="schedadati">
                        <h1>Demon Ray</h1>
                        <h2>Età:</h2> 25<br/>
                        <h2>Game:</h2> ALL<br/>
                        <h2>Ruolo:</h2> OP
                    </div>
                    <div id="hotlink"><a href="#">Season 4 è ufficialmente ..</a></div>
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