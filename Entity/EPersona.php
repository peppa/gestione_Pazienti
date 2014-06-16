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
    
    public $nome;
    public $cognome;
    public $sesso; 
    public $data_nascita;
    public $codice_fiscale;
    public $email;
    public $telefono;
    public $username;
    public $password;
    //3 attributi booleani per identificare il tipo di utente
    public $medico;
    public $paziente;
    
     /**
     * @AssociationType Entity.EAppuntamento
     * @AssociationMultiplicity 0..*
     * @AssociationKind Aggregation
     */
    private $_appuntamento = array();
    
    
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
    /**
     * Restituisce TRUE se la password matcha con l'entità, altrimenti FALSE
     * 
     * @param string $ppassword la pasword da matchare
     * @return boolean TRUE: Password corretta. FALSE: altrimenti
     */
    public function matchWithPassword( $ppassword){
        if (md5($ppassword) == $this->password)
            return TRUE;
        else return FALSE;
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
}

?>