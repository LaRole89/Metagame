<?php    
$db = mysql_connect($par_DbHost,$par_DbUser,$par_DbPassword) or die("<div  style=' width: 200; background-color: black;'><font color=white><b>ERRORE DI ACCESSO AI DATI</B><br>L'errore di solito &egrave; dovuto a problemi di sovraccarico del server, &egrave; temporaneo e sparisce dopo qualche minuto.<br><a href='Javascript:location.reload()'>riprova</a></font></div>");
mysql_select_db($par_Conn);
?>
