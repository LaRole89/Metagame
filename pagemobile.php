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
                      <li><a href="#">Home</a></li>
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>SHOP</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">Categorie</a></li>
                      <li><a href="#">Console</a></li>                      
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>OFFERTE</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">Le nostre offerte</a></li>
                      <li><a href="#">Offerta del giorno</a></li>                                            
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>NEWS</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">News Giochi</a></li>
                      <li><a href="#">News Staff</a></li>
                      <li><a href="#">Prossime Uscite</a></li>    
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>NOW</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">Sondaggi</a></li>
                      <li><a href="#">Interviste</a></li>
                      <li><a href="#">Recensioni</a></li> 
                      <li><a href="#">Video Gameplay</a></li> 
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>BLOG</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">Blog</a></li>
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>FORUM</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">Forum</a></li>
                    </ul>
                </li>
                <li data-role="collapsible" data-iconpos="right" data-inset="false">
                    <h2>APP STORE</h2>
                    <ul data-role="listview" data-theme="b">
                      <li><a href="#">App Store</a></li>
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