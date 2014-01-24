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
