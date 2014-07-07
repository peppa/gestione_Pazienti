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
    private $isMedico;
    private $isPaziente;
    
    /**
     * Autentica confronta un username ed una password con quelli nel database.
     * Se quelli forniti corrispondono ad una coppia user+pwd registrata, allora
     * restituisce TRUE. altrimenti restituisce FALSE per negare il login
     * 
     * @param string $pusername l'username che richiede il login
     * @param string $ppassword la password fornita dall'utente che vuole loggare
     * @return boolean TRUE se l'autenticazione ha avuto successo, FALSE altrimenti
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
                    $this->isMedico="Medico";
                }
                if ($EPersona->isPaziente()) {
                    $session->imposta_valore('paziente',TRUE);
                    $this->isPaziente="Paziente";
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
    /**
     * recupera gli user e pwd passati dal form e procede ad autenticarli.
     * 
     * 
     * @return boolean TRUE se l'utente è autenticato, FALSE altrimenti
     */
    public function login() {
        $Session = USingleton::getInstance("USession");
        if (!$this->isAutenticato()){
            $VLogin=  USingleton::getInstance('VLogin');
            $user=$VLogin->getUsername();
            $pass=$VLogin->getPassword();
            return $this->autentica($user, $pass);
        }else return TRUE; 
    }
    
    /**
     * Verifica se l'utente si è già autenticato
     * 
     * @return boolean
     */
    public function isAutenticato(){
        $Session=  USingleton::getInstance('USession');
        if ($Session->leggi_valore('username')){
            return TRUE;            
        }else return FALSE;
    }
    /**
     * Verifica se è un medico
     * 
     * @return bool TRUE se è medico, FALSE altrimenti
     */
    public function isMedico() {
        return $this->isMedico;
    }
    /**
     * Verifica se è un paziente
     * 
     * @return bool TRUE se è paziente, FALSE altrimenti
     */
    public function isPaziente() {
        return $this->isPaziente;
    }
    /**
     * Effettua il logout
     */
    public function logout(){
        $session=USingleton::getInstance('USession');
        $session->cancella_sessione();
        return TRUE;
    }
    
    
    /**
     * Smista le richieste che arrivano al controllore mediante la task passata
     * nell'url
     * 
     * @return type
     */
    public function smista(){
        $VLogin=USingleton::getInstance('VLogin');
        $task=$VLogin->getTask();
        
        switch ($task) {
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