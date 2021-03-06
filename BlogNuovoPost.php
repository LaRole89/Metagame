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
        <title>MetaGame Blog: Scrivi Nuovo Post</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
        <article><!--div grande-->
            <p id="path"> Home > Blog > Blog di demon > Nuovo Post</p>
            <div id="conteinerCenter">
                <h1>
                Scrivi un Nuovo Post
                </h1>
                <div class="schedaArticolo">
                    <div id="titolo"><h2>Nuovo Post</h2></div>
                    <div id="articolo">
                        <div class="ui-field-contain" >
                            <label for="name">Titolo:</label>
                            <input type="text" name="title" value="" data-clear-btn="true">
                        </div>
                        <div class="ui-field-contain">
                            <label for="textarea2">Descrizione:</label>
                            <input type="text" name="subtitle" value="" data-clear-btn="true">
                        </div>
                        
                        <div class="ui-field-contain">
                            <label for="textarea2">Discussione:</label>
                            <textarea cols="40" rows="8" name="textarea2"></textarea>
                        </div>

                        <div class="ui-field-contain">
                            <label for="textarea2">Tag:</label>
                            <textarea cols="40" rows="8" name="textarea2"></textarea>
                        </div>
                        
                        <div >
                            <div id="bottoneForum">
                                <input type="button" value="Inserisci">
                            </div>
                        </div>
                        <br><br><br>
                    </div>
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