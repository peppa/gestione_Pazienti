<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of CHome
 *
 * @access public
 * @package Controller
 * @author Carlo
 */
class CHome {
    
    //sta classe è da completa mano mano...
    public function impostaPagina(){ 
        //controlla se l'utente è un medico, paziente, non registrato 
        $sessione=USingleton::getInstance("USession");
        $sessione=new USession();// riga da eliminare
        if ($sessione->leggi_valore("medico")==1) { /*carica pag medico  */}
            elseif ($sessione->leggi_valore("paziente")==1) { /*carica pag paziente */}
        else {/*carica pag non registrato*/}
        
        
        
    }
}

?>