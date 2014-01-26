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


        <title>MetaGame Forum: Nuovo Topic</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article data-role="content">
                <p id="path"> Home > Forum > Assassin's Creed > Nuovo Topic </p>
              <ul data-role="listview" data-inset="true" data-divider-theme="b">
                <li data-role="list-divider" id="MainTopic">Nuovo Topic</li>
                <li>      
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
                    
                    <div >
                        <div id="bottoneForum">
                            <input type="button" value="Inserisci">
                        </div>
                    </div>
                                        
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