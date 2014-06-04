<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * @todo La funzione autentica dovrà restituire non solo TRUE o FALSE ma anche
 * il tipo di utente che si è loggato (medico, paziente ecc) per consentire il corretto
 * smistamento tra le pagine.
 */

/**
 * Description of CLogin
 *
 * @access public
 * @package Controller
 * @author Carlo
 */
class CLogin {
    private $_username;
    private $_password;
    
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
        //inizializzo la connessione al db creando un oggetto FPersona
        $FPersona = new FPersona();
        //recupero dal db l'entità corrispondente all'username
        $EPersona =$FPersona->load($pusername);
        //verifico che sia stata trovata
        if($EPersona){
            if($ppassword == $EPersona->getPassword()){
                $session=USingleton::getInstance('USession');
                $session->imposta_valore('username',$pusername);
                $session->imposta_valore('nome_cognome',$EPersona->getNome().' '.$EPersona->getCognome());
                if ($EPersona->isMedico()){
                    $session->imposta_valore('medico',TRUE);
                    $tipoUtente="Medico";
                }
                elseif ($EPersona->isPaziente()) {
                    $session->imposta_valore('paziente',TRUE());
                    $tipoUtente="Paziente";
                }
                elseif ($EPersona->isDirigente()) {
                    $session->imposta_valore('dirigente',TRUE);
                    $tipoUtente="Dirigente";
                }
                
                return true;
            
                
                
                
                
            }else {// vuol dire che user e pwd non matchano il db
                $this->_errore='Username o password errati';
            }
                   
        }else{
            $this->_errore='L\'account non esiste'; 
            
        }
        
        return false;
       
    }
}

?>