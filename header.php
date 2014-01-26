<?php
error_reporting(E_ERROR);
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
            <li><a href="index.php">HOME</a></li>
            <li><a href="giochi.php">SHOP</a>
                <ul>
                    <li><a href="categorie.php">Categorie</a></li>
                    <li><a href="console.php">Console</a></li>
                </ul>
            </li>
            <li><a href="offerte.php">OFFERTE</a>
                    <ul>
                      <li><a href="lenostreofferte.php">Le nostre offerte</a></li>
                      <li><a href="offertadelgiorno.php">Offerta del giorno</a></li>                                            
                    </ul>
            </li>
            <li><a href="news.php">NEWS</a>
                    <ul>
                      <li><a href="newsgiochi.php">News Giochi</a></li>
                      <li><a href="newsstaff.php">News Staff</a></li>
                      <li><a href="prossimeuscite.php">Prossime Uscite</a></li>    
                    </ul>
            </li>
            <li><a href="now.php">NOW</a>
                    <ul>
                      <li><a href="sondaggi.php">Sondaggi</a></li>
                      <li><a href="interviste.php">Interviste</a></li>
                      <li><a href="recensioni.php">Recensioni</a></li> 
                      <li><a href="gameplay.php">Video Gameplay</a></li> 
                    </ul>
            </li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="forum.php">FORUM</a></li>
            <li><a href="https://play.google.com/store?hl=it">APP STORE</a></li>
        </ul>
    </nav>
    
    <div id="logotitle">
        <img src="img/logotitle.png"/>

    </div>
    <div id="search">
        <a href="#searchpage"><img id="iconamobile" src="img/search_icon.png" /></a>
        <a href="search.php"><img id="iconadesk" src="img/search_icon_min.png" /></a>
    </div>
    <div id="login" style="text-align: center;">
    <?php if(!isset($_SESSION['IDutente'])){ //se nn è stato fatto il login  ?>
        <a href="login.php" class="ui-btn">LOGIN</a>
    <?php } else { ?>
        <div style="display: inline-table; width: 22%; height: 100%;">
            <a href="carrello.php" class="ui-btn">C</a>
        </div>
        <div style="display: inline-table; width: 50%; height: 100%;">
            <a href="?logout=1" class="ui-btn">LOGOUT</a>
        </div>
        <div style="display: inline-table; width: 22%; height: 100%;">
            <a href="utente.php" class="ui-btn">P</a>
        </div>
    <?php } ?>
    </div>
    
</header>