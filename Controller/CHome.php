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
        $VHome=  USingleton::getInstance("VHome");
        //$VHome=new VHome();//da cancellare
        //$sessione=new USession();// riga da eliminare
        
        
        $contenutoHTML= $this->smista();//qui gli deve arrivare codice html da mettere come contenuto principale
        if ($sessione->leggi_valore("medico")==TRUE) { /*carica pag medico  */}
            elseif ($sessione->leggi_valore("paziente")==TRUE) { /*carica pag paziente */}
        else {
            $VHome->impostaPaginaNonRegistrato();
        }        
    }
    
    public function visualizzaPagina(){
        $this->impostaPagina();
        $VHome=  USingleton::getInstance('VHome');
        $VHome->mostraPagina();
    }
    
    public function smista() {
        $view=  USingleton::getInstance('VHome');
        $view=new VHome(); //riga da rimuovere
        
        $controllore=$view->getController();
       
        
        switch ($controllore) {
            case 'clogin':
                $CLogin=  USingleton::getInstance('CLogin');
                return $CLogin->smista();

            default:
                echo"è partito il caso di default dello switch su CHome";
                break;
        }
        
        
    }
}

?>