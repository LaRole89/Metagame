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
        <title>MetaGame: Pagamento e Spedizione</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
            <?php
            include 'header.php';
            ?>
            <article>
                <p id="path"> Home > Utente > Carrello > Pagamento e Spedizione </p>
                <h1>Pagamento e Spedizione</h1>
                <div id="contenitore">
                    <h2 style="line-height: 40px;">Metodo di pagamento</h2>
                    <form  action="" autocomplete="on"> 
                        <p> 
                            <label for="tipocarta" class="label" > Tipo di Carta </label>
                            <select name="tipocarta"> 
                                <option value="Visa"> Visa </option>
                                <option value="Mastercard"> Mastercard </option>
                                <option value="American Express"> American Express </option>
                            </select>
                        </p>
                        <p> 
                            <label for="carta">Numero di carta</label>
                            <input name="carta" required="required" type="text"/>
                        </p>
                        <p> 
                            <label for="scadenza">Scadenza</label>
                            <input name="scadenza" required="required" type="text" placeholder="Mese/Anno"/>
                        </p>
                        <p> 
                            <label for="titolare">Titolare</label>
                            <input name="titolare" required="required" type="text"/>
                        </p>
                        <p> 
                            <label for="cvc">CVC</label>
                            <input name="cvc" required="required" type="text"/>
                        </p><br />
                        <h2>Indirizzo di spedizione</h2> <br />
                        <p class="link" style="text-align: justify;">  
                            Verrà utilizzato automaticamente l'indirizzo specificato durante la fase di registrazione. Se vuoi cambiarlo
                        </p>
                        <a href="login.php"> clicca qui. </a>
                        <br /><br />
                        <p class="bottone"> 
                            <a href="index.php?login=1" class="ui-btn">Conferma</a> 
                        </p>
                    </form>
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
