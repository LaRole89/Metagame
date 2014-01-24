<?php
//RESTITUISCE L'URL CORRENTE
function selfURL() { 
 $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : ""; 
 $protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s; 
 $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
 return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI']; 
} 

function strleft($s1, $s2) { 
 return substr($s1, 0, strpos($s1, $s2)); 
}

function TogliDalCarrello($IDgioco, $IDutente, $ordine){
    $MyGioco="SELECT quantita FROM carrello WHERE videogioco=$IDgioco AND ordine=$ordine AND IDutente=$IDutente";
    $resultGioco=mysql_query($MyGioco);
    $numeroGiochi=mysql_fetch_array($resultGioco);
    
    //tolgo il gioco dal carrello
    if($numeroGiochi['quantita']>1){            
        $MySqlTogliCarrello="UPDATE carrello SET quantita=quantita-1 WHERE videogioco=$IDgioco AND ordine=$ordine AND IDutente=$IDutente";
        mysql_query($MySqlTogliCarrello);
    }else{
        $MySqlTogliCarrello="DELETE FROM carrello WHERE videogioco=$IDgioco AND ordine=$ordine AND IDutente=$IDutente";
        mysql_query($MySqlTogliCarrello);
    }
    
    //aggiunge gioco nel magazzino
    $MySqlAggMagazino="UPDATE videogioco SET numero=numero+1 WHERE id=$IDgioco";
    mysql_query($MySqlAggMagazino);
    
}

//funzione che verivica la corretezza di una mail e la restituisce, ritorna False altrimenti
function verifica_email($em){
  //pulisco la stringa
  $em = filter_var($em, FILTER_SANITIZE_EMAIL);
  //verifico e ritorno
  return filter_var($em, FILTER_VALIDATE_EMAIL);
}
?>
