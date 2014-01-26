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
        <title>MetaGame: Sondaggio</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
            <?php
            include 'header.php';
            ?>
            <article>
                <p id="path"> Home > Now > Sondaggi > Sondaggio</p>
                <div id="conteinerCenter">
                    <h1>
                        Sondaggio Personaggi
                    </h1>
                    <form action="" class="sondaggio">
                        <fieldset>
                            <legend>Qual è il personaggio che vi è piaciuto di più?</legend><br>
                            <input type="radio" name="persongaggi" value="Edward Kenway" class="radio"/>
                            <label for="Edward Kenway"> Edward  (20 voti) </label>
                            <input type="radio" name="persongaggi" value="Adéwalé" class="radio"/>
                            <label for="Adéwalé"> Adéwalé (3 voti) </label>
                            <input type="radio" name="persongaggi" value="Mary Read" class="radio"/>  
                            <label for="Mary Read"> Mary Read (10 voti) </label>
                            <input type="radio" name="persongaggi" value="Ah Tebai" class="radio"/> 
                            <label for="Ah Tebai"> Ah Tebai (4 voti) </label>
                            <input type="radio" name="persongaggi" value="Laureano Torres" class="radio"/>  
                            <label for="Laureano Torres"> Laureano Torres (2 voti) </label>
                            <input type="radio" name="persongaggi" value="Woodes Rooger" class="radio"/> 
                            <label for="Woodes Rooger"> Woodes Rooger (11 voti) </label>
                            <input type="radio" name="persongaggi" value="Benjamin Hornigold" class="radio"/> 
                            <label for="Benjamin Hornigold"> Benjamin Hornigold (3 voti) </label>
                            <input type="radio" name="persongaggi" value="Julien DuCasse" class="radio"/>  
                            <label for="Julien DuCasse"> Julien DuCasse (0 voti) </label>
                            <input type="radio" name="persongaggi" value="John Cockram" class="radio"/>  
                            <label for="John Cockram"> John Cockram (o voti) </label>
                            <input type="radio" name="persongaggi" value="Josiah Burgess" class="radio"/> 
                            <label for="Josiah Burgess"> Josiah Burgess (4 voti) </label>
                            <input type="radio" name="persongaggi" value="Duncan Walpole" class="radio"/> 
                            <label for="Duncan Walpole"> Adéwalé (6 voti) </label>
                        </fieldset> <br />
                        <input type="submit" value="Conferma" class="confermasondaggio" /> 
                    </form>
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