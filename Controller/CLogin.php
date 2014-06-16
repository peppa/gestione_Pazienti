<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * @todo La funzione autentica dovrà restituire non solo TRUE o FALSE ma anche
 * il tipo di utente che si è loggato (medico, paziente ecc) per consentire il corretto
 * smistamento tra le pagine.
 * @todo inserire il get $_errore
 */

/**
 * Description of CLogin
 *
 * @access public
 * @package Controller
 * @author Carlo
 */
class CLogin {
    private $_errore;
    private $loggato;
    
    /**
     * Autentica confronta un username ed una password con quelli nel database.
     * Se quelli forniti corrispondono ad una coppia user+pwd registrata, allora
     * restituisce TRUE. altrimenti restituisce FALSE per negare il login
     * 
     * @param string $pusername l'username che richiede il login
     * @param string $ppassword la password fornita dall'utente che vuole loggare
     * @return boolean
     */
    public function autentica( $pusername, $ppassword){
        //inizializzo/ottengo la connessione al db prendendo l'istanza di FPersona
        $FPersona = USingleton::getInstance('FPersona');
        //recupero dal db l'entità corrispondente all'username
        $EPersona =$FPersona->load($pusername);
        //verifico che sia stata trovata
        if($EPersona){
            if($EPersona->matchWithPassword($ppassword)){
                $session=USingleton::getInstance('USession');
                $session->imposta_valore('username',$pusername);
                $session->imposta_valore('nome_cognome',$EPersona->getNome().' '.$EPersona->getCognome());
                if ($EPersona->isMedico()){
                    $session->imposta_valore('medico',TRUE);
                    $tipoUtente="Medico";
                }
                if ($EPersona->isPaziente()) {
                    $session->imposta_valore('paziente',TRUE);
                    $tipoUtente="Paziente";
                }
                return TRUE;
            
                
            }else {// vuol dire che user e pwd non matchano il db
                $this->_errore='Username o password errati';
            }
                   
        }else{
            $this->_errore='L\'account non esiste'; 
            
        }
        
        return false;
       
    }
    public function login() {
        $Session = USingleton::getInstance("USession");
        if (!$Session->leggi_valore('username')){
            $VLogin=  USingleton::getInstance('VLogin');
            $user=$VLogin->getUsername();
            $pass=$VLogin->getPassword();
            return $this->autentica($user, $pass);
        }else return TRUE; 
    }
    public function isAutenticato(){
        $Session=  USingleton::getInstance('USession');
        if ($Session->leggi_valore('username')){
            return TRUE;            
        }else return FALSE;
    }
    /**
     * Effettua il logout
     */
    public function logout(){
        $session=USingleton::getInstance('USession');
        $session->cancella_sessione();
        return TRUE;
    }
    
    public function smista(){
        $VLogin=USingleton::getInstance('VLogin');
        $Session=USingleton::getInstance('USession');
        
        switch ($VLogin->getTask()) {
            case 'LOGIN':
                return $this->login();
                
            
            case 'LOGOUT':
                return $this->logout();
                


            default:
                return $this->isAutenticato();
        }
        
    }
    
}

?>