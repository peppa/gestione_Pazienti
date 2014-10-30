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
        $CLogin =  USingleton::getInstance("CLogin");
        //$CLogin= new CLogin();
        //$VHome=new VHome();//da eliminare
        //$sessione=new USession();// riga da eliminare
        
        
        $contenutoHTML= $this->smista();//qui gli deve arrivare codice html da mettere come contenuto principale
        //var_dump($contenutoHTML);//da eliminare
        var_dump($CLogin->isMedico());
        if ($CLogin->isMedico()) { echo"io carico la pagina del medico";/*carica pag medico  */}
            elseif ($CLogin->isPaziente()) {echo"io carico la pagina del paziente"; /*carica pag paziente */}
        if (!$CLogin->isAutenticato()) {
            echo"io carico la pagina del non registrato";//da eliminare
            $VHome->impostaPaginaNonRegistrato();
        }         
    }
    
    /**
     * Visualizza la pagina impostata fin ora
     * 
     */
    public function visualizzaPagina(){
        $this->impostaPagina();
        $VHome=  USingleton::getInstance('VHome');
        $VHome->mostraPagina();
    }
    
    /**
     * Si occupa di smistare i compiti ai vari controlliri
     * 
     * @return type
     */
    public function smista() {
        $view=  USingleton::getInstance('VHome');
        $view=new VHome(); //riga da rimuovere
        
        $controllore=$view->getController();
       
        
        switch ($controllore) {
            case 'clogin':
                echo"è partito il caso clogin dello switch su CHome";
                $CLogin=  USingleton::getInstance('CLogin');
                return $CLogin->smista();
            case 'registra':
                echo 'è partito il caso registra dello switch su CHome';
                $CRegistra=  USingleton::getInstance("CRegistra");
                return $CRegistra->smista();

            default:
                echo"è partito il caso di default dello switch su CHome";
                break;
        }
        
        
    }
}

?>