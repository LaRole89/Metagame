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
        <title></title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
            <article>
            <p id="path"> Home > Prodotti > Inserimento Prodotto </p>
                <h1 id="titolo">
                Inserimento prodotto
                </h1>

                <form  action="" autocomplete="on"> 
                    <p> 
                        <label for="titolo" class="label"> Titolo </label>
                        <input name="titolo" class="campotesto" required="required" type="text" placeholder="es: Final Fanatsy VII" />
                    </p>
                    <p> 
                        <label for="genere" class="label" > Genere </label>
                        <select name="genere"> 
                        <option value="Action/Adventure"> Action/Adventure </option>
                        <option value="RPG"> RPG </option>
                        <option value="Platform"> Platform </option>
                        </select>
                    </p>
                    <p> 
                        <label for="versione" class="label"> Versione </label>
                        <select name="versione"> 
                        <option value="PAL-ITA"> PAL-ITA </option>
                        <option value="NTSC-US"> NTFC-US </option>
                        </select>
                    </p>
                    <p> 
                        <label for="supporto" class="label"> Tipo di supporto </label>
                        <select name="supporto"> 
                        <option value="Blu-Ray"> Blu-Ray </option>
                        <option value="DVD"> DVD </option>
                        <option value="CD"> CD </option>
                        <option value="Scaricabile"> Scaricabile </option>
                        </select>
                    </p>
                    <p> 
                        <label for="giocatori" class="label"> Numero di giocatori </label>
                        <input name="giocatori" class="campotesto" required="required" type="number" placeholder="es: 1" min="1"/>
                    </p>
                    <p> 
                        <label for="immagine" class="label"> Immagine </label>
                        <input name="immagine" class="campotesto" required="required" type="file"/>
                    </p>
                    
                    
                    <p> 
                        <input type="submit" value="Conferma"/> 
                    </p>

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
