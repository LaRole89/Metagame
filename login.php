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
            <p id="path"> Home > Utente > Login </p>
                <h1>Login</h1>
                <form  action="" autocomplete="on"> 
                    <p> 
                        <label for="username">Il tuo username</label>
                        <input name="username" class="campotesto" required="required" type="text" placeholder="es: Trundle77" />
                    </p>
                    <p> 
                        <label for="password1">La tua password </label>
                        <input name="password1" class="campotesto" required="required" type="password" placeholder="es: X8df!90EO"/>
                    </p>

                    <p class="bottone"> 
                        <a href="index.php?login=1" class="ui-btn">Login</a> 
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