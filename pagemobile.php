<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div data-role="page" id="menuphone">
            <ul data-role="listview"  data-inset="true" data-shadow="false">
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>HOME</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="index.php">Home</a></li>
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>SHOP</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="categorie.php">Categorie</a></li>
                      <li><a href="console.php">Console</a></li>                      
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>OFFERTE</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="lenostreofferte.php">Le nostre offerte</a></li>
                      <li><a href="offertadelgiorno.php">Offerta del giorno</a></li>                                            
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>NEWS</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="newsgiochi.php">News Giochi</a></li>
                      <li><a href="newsstaff.php">News Staff</a></li>
                      <li><a href="prossimeuscite.php">Prossime Uscite</a></li>    
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>NOW</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="sondaggi.php">Sondaggi</a></li>
                      <li><a href="interviste.php">Interviste</a></li>
                      <li><a href="recensioni.php">Recensioni</a></li> 
                      <li><a href="gameplay.php">Video Gameplay</a></li> 
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>BLOG</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="blog.php">Blog</a></li>
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>FORUM</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="forum.php">Forum</a></li>
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>APP STORE</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="https://play.google.com/store?hl=it">App Store</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div data-role="page" id="searchpage">
        <?php
        include 'header.php';
        ?><br/><br/><br/>
        <label for="search-4" class="ui-hidden-accessible">Search Input:</label>
        <input type="search" name="search-4" id="search-4" value="">
        <br/><br/><br/>
        <a href="search.php" class="ui-btn">SEARCH</a><br/><br/><br/>
        <?php
        include 'footer.php';
        ?>  
        </div>
        <div data-role="page" id="loginpage">
            login
        </div>