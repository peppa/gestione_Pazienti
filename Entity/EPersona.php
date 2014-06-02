<?php

/*
 * File creato da Carlo Centofanti
 */
/**
 * @todo Bisogna sistemare la data di nascita con un tipo di dato opportuno...
 * andrebbe usata per esempio il tipo date di php o un timestamp.
 */

/**
 * EPersona. entità generica di una persona.
 *
 * @access public
 * @package Entity
 * @author Carlo
 */
class EPersona {
    
    private $nome;
    private $cognome;
    private $sesso; 
    private $data_nascita;
    private $codice_fiscale;
    private $email;
    private $telefono;
    private $username;
    private $password;
    //3 attributi booleani per identificare il tipo di utente
    public $medico;
    public $dirigente;
    public $paziente;
    
     /**
     * @AssociationType Entity.EAppuntamento
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    private $_appuntamento = array();
    
   
    /**
     * 
     * @param type $pnome Il nome della persona
     * @param type $pcognome Il cognome della persona
     * @param type $psesso Il sesso della persona (Maschio/Femmina)
     * @param type $pdata_nascita La data di nascita. Sarebbe da implementare nel formato corretto
     * @param type $pemail l'email della persona
     * @param type $ptelefono Il numero di telefono della persona
     * @param type $pcodice_fiscale Il codice fiscale della persona. deve essere lungo 16 caratteri
     * @param type $pusername L'username scelto dalla persona per il login
     * @param type $ppasword La password scelta per il login.
     * @param bool $ppaziente Booleana. Se vera la persona è un paziente
     * @param bool $pmedico Booleana. Se vera la persona è un medico
     * @param bool $pdirigente Booleana. Se vera la persona è un dirigente
     */
    /**function __construct($pnome, $pcognome, $psesso, $pdata_nascita, $pemail, 
            $ptelefono, $pcodice_fiscale, $pusername, $ppasword, $ppaziente=TRUE, 
            $pmedico=FALSE, $pdirigente=FALSE) {
        
        $this->nome=$pnome;
        $this->cognome=$pcognome;
        $this->sesso=$psesso;
        $this->data_nascita=$pdata_nascita;
        $this->email=$pemail;
        $this->telefono=$ptelefono;
        $this->codice_fiscale=$pcodice_fiscale;
        $this->username=$pusername;
        $this->password=$ppasword;
        $this->medico=$pmedico;
        $this->paziente=$ppaziente;
        $this->dirigente=$pdirigente;
    } */
    
     
    
      //metodi:
    
    
    
    /**
     * Fa un push nell'array degli appuntamenti di una data persona.
     * 
     * @access public
     * @param Entity.EAppuntamento aParameter
     * @return boolean
     * @ParamType aParameter Entity.EAppuntamento
     * @ReturnType boolean
     */
    public function addAppuntamento(EAppuntamento $pappuntamento) {
        array_push($this->_appuntamento, $pappuntamento);
    }
    
    
     /**
     * Restituisce un array di commenti relativi al libro
     *
     * @access public
     * @return array
     * @ReturnType array
     */
    public function getAppuntamenti() {
        return ($this->_appuntamenti);
    }
    
    
    //getter e setter degli attributi semplici
    
    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getSesso(){
        return $this->sesso;
    }
    public function getDataNascita(){
        return $this->data_nascita;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getCodiceFiscale(){
        return $this->codice_fiscale;
    }
    public function  getPassword(){
        return $this->password;
    }
    public function  getUsername(){
        return $this->username;
    }
    public function isMedico(){
        return $this->medico;
    }
    public function isPaziente(){
        return $this->paziente;
    }
    public function isDirigente(){
        return $this->dirigente;
    }



    public function setNome($pnome){
        $this->nome=$pnome;
    }
    public function setCognome($pcognome){
        $this->cognome=$pcognome;
    }
    public function setSesso($psesso){
        $this->sesso=$psesso;
    }
    public function setDataNascita($pdata_nascita){
        $this->data_nascita=$pdata_nascita;
    }
    public function setEmail($pemail){
        $this->email=$pemail;
    }
    public function setTelefono($ptelefono){
        $this->telefono=$ptelefono;
    }
    public function setCodiceFiscale($pcodice_fiscale){
        if (strlen($pcodice_fiscale)==16)
            $this->codice_fiscale=$pcodice_fiscale;
        else throw new Exception('lunghezza codice fiscale errata!!!');
    }
    public function setPassword($ppassword){
        $this->password=$ppassword;
    }
    public function setUsername ($pusername){
        $this->username=$pusername;
    }
    public function toggleMedico(){
        if ($this->medico) $this->medico=FALSE;
        else $this->medico=TRUE;
    }
    public function togglePaziente(){
        if ($this->paziente) $this->paziente=FALSE;
        else $this->paziente=TRUE;
    }
    public function toggleDirigente(){
        if ($this->dirigente) $this->dirigente=FALSE;
        else $this->dirigente=TRUE;
    }
}

?>