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
            <p id="path"> Home > Utente > Registrazione </p>
                <h1>Registrati</h1>

                <form  action="" autocomplete="on"> 
                    <p> 
                        <label for="username">Il tuo username</label>
                        <input name="username" required="required" type="text" placeholder="es: Trundle77" />
                    </p>
                    <p>  
                        <label for="email"> Il tuo indirizzo email</label>
                        <input name="email" required="required" type="email" placeholder="es: mail@dominio.com"/> 
                    </p>
                    <p> 
                        <label for="password1">La tua password </label>
                        <input name="password1"  required="required" type="password" placeholder="es: X8df!90EO"/>
                    </p>
                    <p> 
                        <label for="password2">Per favore, conferma la tua password </label>
                        <input name="password2"  required="required" type="password" placeholder="es: X8df!90EO"/>
                    </p>
                    <p> 
                        <label for="indirizzo">Il tuo indirizzo (per le spedizioni)</label>
                        <input name="indirizzo"  required="required" type="text" placeholder="es: via Roma 55"/>
                    </p>
                    <p> 
                        <label for="citta">La tua città</label>
                        <input name="citta" required="required" type="text" placeholder="es: Milano"/>
                    </p>
                    <p> 
                        <label for="cap">Il codice di avviamento postale</label>
                        <input name="cap" required="required" type="text" placeholder="es: 30173"/>
                    </p>
                    <p class="bottone"> 
                        <a href="index.php?login=1" class="ui-btn">Conferma</a> 
                    </p>
                    <p class="link">  
                        Sei già membro?
                        <a href="login.php"> Procedi al login </a>
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
