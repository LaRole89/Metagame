<?php
session_start(); //apro la sessione

if((!IsSet($_SESSION['IDutente']))&&(@$_GET['login'] == 1))
{
    $_SESSION['IDutente'] = 1;
}
if(@$_GET['logout'] == 1) //Effettuo il Logout
{
	$_SESSION = array(); //Desetto tutte le variabili di sessione
	
}
?>

<header>
    <div id="menuicon">
        <a href="#menuphone"><img src="img/menu_icon.png"/></a>
    </div>
    <div id="logo">
        <img src="img/logo.png" />
    </div>
    
    
    <nav id="navprincipale">
        <ul id="menu">
            <li><a href="#">HOME</a></li>
            <li><a href="#">SHOP</a>
                <ul>
                    <li><a href="#">Categorie</a></li>
                    <li><a href="#">Console</a></li>
                </ul>
            </li>
            <li><a href="#">OFFERTE</a>
                    <ul>
                      <li><a href="#">Le nostre offerte</a></li>
                      <li><a href="#">Offerta del giorno</a></li>                                            
                    </ul>
            </li>
            <li><a href="#">NEWS</a>
                    <ul>
                      <li><a href="#">News Giochi</a></li>
                      <li><a href="#">News Staff</a></li>
                      <li><a href="#">Prossime Uscite</a></li>    
                    </ul>
            </li>
            <li><a href="#">NOW</a>
                    <ul>
                      <li><a href="#">Sondaggi</a></li>
                      <li><a href="#">Interviste</a></li>
                      <li><a href="#">Recensioni</a></li> 
                      <li><a href="#">Video Gameplay</a></li> 
                    </ul>
            </li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">FORUM</a></li>
            <li><a href="#">APP STORE</a></li>
        </ul>
    </nav>
    
    <div id="logotitle">
        <img src="img/logotitle.png"/>

    </div>
    <div id="search">
        <a href="#searchpage"><img id="iconamobile" src="img/search_icon.png" /></a>
        <a href="#searchpage"><img id="iconadesk" src="img/search_icon_min.png" /></a>
    </div>
    <div id="login">
    <?php if(!isset($_SESSION['IDutente'])){ //se nn è stato fatto il login  ?>
        <a href="login.php" class="ui-btn">LOGIN</a>
    <?php } else { ?>
        <a href="?logout=1" class="ui-btn">LOGOUT</a>
    <?php } ?>
    </div>
    
</header>