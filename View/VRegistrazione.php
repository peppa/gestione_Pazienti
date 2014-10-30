<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of VRegistrazione
 *
 * @access public
 * @package VRegistrazione
 * @author Carlo
 */
class VRegistrazione extends View {
    
    private $errore;
    private $dati;
    
    /**
     * Imposta un messaggio di errore da visualizzare
     * 
     * @param string $perrore
     */
    public function setErrore($perrore){
        $this->errore=$perrore;
    }
    
    
    /**
     * restituisce il nome inserito nella form
     * 
     * @return string
     */
    public function getNome() {
        if (isset($_REQUEST['reg_nome']))
            return $_REQUEST['reg_nome'];
        else
            return false;
    }
    
    /**
     * restituisce il cognome inserito nella form
     * 
     * @return string
     */
    public function getCognome() {
        if (isset($_REQUEST['reg_cognome']))
            return $_REQUEST['reg_cognome'];
        else
            return false;
    }
    
    /**
     * restituisce il codice fiscale inserito nella form
     * 
     * @return string
     */
    public function getCodiceFiscale() {
        if (isset($_REQUEST['reg_codicefiscale']))
            return $_REQUEST['reg_codicefiscale'];
        else
            return false;
    }
    
    /**
     * restituisce il sesso inserito nella form
     * 
     * @return string
     */
    public function getSesso() {
        if (isset($_REQUEST['reg_sesso']))
            return $_REQUEST['reg_sesso'];
        else
            return false;
    }
    
    /**
     * restituisce la data di nascita inserito nella form
     * 
     * @return string
     */
    public function getDataNascita() {
        if (isset($_REQUEST['reg_datadinascita']))
            return $_REQUEST['reg_datadinascita'];
        else
            return false;
    }
    
    /**
     * restituisce l'email inserito nella form
     * 
     * @return string
     */
    public function getEmail() {
        if (isset($_REQUEST['reg_email']))
            return $_REQUEST['reg_email'];
        else
            return false;
    }
    
    /**
     * restituisce il numero di telefono inserito nella form
     * 
     * @return string
     */
    public function getTelefono() {
        if (isset($_REQUEST['reg_telefono']))
            return $_REQUEST['reg_telefono'];
        else
            return false;
    }
    
    /**
     * restituisce l'username inserito nella form
     * 
     * @return string
     */
    public function getUsername() {
        if (isset($_REQUEST['reg_username']))
            return $_REQUEST['reg_username'];
        else
            return false;
    }
    
    /**
     * restituisce la password inserita nella form
     * 
     * @return string
     */
    public function getPassword() {
        if (isset($_REQUEST['reg_password']))
            return $_REQUEST['reg_password'];
        else
            return false;
    }
    
    
    /**
     * Restituisce il codice html estratto dal template del login
     * registrazione.tpl deve avere una form che ha tutti i campi dei get
     * 
     * @return string
     */
    public function processaTemplate() {
        $this->assign($errore, $this->errore);
        $contenuto=$this->fetch('registrazione.tpl');
        return $contenuto;
    }
    
    /**
     * recupero i dati e li restituisco tramite un array che ha le seguenti chiavi:
     * <ol>
     * <li>nome</li>
     * <li>cognome</li>
     * <li>codiceFiscale</li>
     * <li>sesso</li>
     * <li>DataNascita</li>
     * <li>email</li>
     * <li>telefono</li>
     * <li>username</li>
     * <li>password</li>
     * 
     * 
     * @return array
     */
    public function recuperaDati(){
        $this->dati[nome]=  $this->getNome();
        $this->dati[cognome]= $this->getCognome();
        $this->dati[codiceFiscale]=  $this->getCodiceFiscale();
        $this->dati[sesso]=  $this->getSesso();
        $this->dati[dataNascita]=  $this->getDataNascita();
        $this->dati[email]=  $this->getEmail();
        $this->dati[telefono]=  $this->getTelefono();
        $this->dati[username]=  $this->getUsername();
        $this->dati[password]=  $this->getPassword();
        
        return $this->dati;       
        
    }
    
}



?>