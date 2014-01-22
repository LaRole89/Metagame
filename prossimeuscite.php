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

        <title>MetaGame: Prossime Uscite</title>
    </head>
    <body>
        <div data-role="page" id="first_page">
        <?php
        include 'header.php';
        ?>
        
        <p>
			<a href="UscitaThief.php"><b>Thief: annunciata la data d'uscita!</b></a><br>
			Square Enix ha annunciato le date ufficiali per il nuovo Thief, gioco sviluppato da Eidos Montreal, che vedrà il buon Garrett alle prese
			<a href="UscitaThief.php">...</a>
		</p>

		<br>

		<p>
			<a href="*"><b>Raiden è pronto a scendere sul campo, Metal Gear Rising: Revengeance in arrivo!</b></a><br>
			Per tutti gli appassionati di Metal Gear Solid, ecco un nuovo entusiasmante capitolo che 
			<a href="*">...</a>
		</p>

		<br>

		<p>
			<a href="*"><b>Vuoi sentirti di nuovo bambino, e rivivere le storie dei Fratelli Grimm, ancora poco e potrai!</b></a><br>
			Immergiti in un mondo da fiaba, un mix tra i Fratelli Grimm e American McGee 
			<a href="*">...</a>
		</p>

		<br>

		<p>
			<a href="*"><b>Ubisoft annuncia un nuovo capitolo della saga Assassin's Creed</b></a><br>
			La confraternita degli assassini ti chiama alle armi, in un nuovo capitolo ambientato
			<a href="*">...</a>
		</p>
        
        <?php
        include 'footer.php';
        ?>    
        </div>
  
        
        <div data-role="page" id="menuphone">
                menu
        </div>
        <div data-role="page" id="searchpage">
            search
        </div>
        <div data-role="page" id="loginpage">
            login
        </div>
    </body>

</html>
