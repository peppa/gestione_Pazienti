<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Description of VLogin
 *
 * @access public
 * @package View
 * @author Carlo
 */
class VLogin extends View {
    
       
    /**
     * restituisce la password passata tramite GET o POST
     *
     * @return mixed
     */
    public function getPassword() {
        if (isset($_REQUEST['password']))
            return $_REQUEST['password'];
        else
            return false;
    }
    /**
     * restituisce la username passata tramite GET o POST
     *
     * @return mixed
     */
    public function getUsername() {
        if (isset($_REQUEST['username']))
            return $_REQUEST['username'];
        else
            return false;
    }
    
    /**
     * Restituisce il controllore
     * @return mixed
     */
    public function getController() {
        if (isset($_REQUEST['controller']))
            return $_REQUEST['controller'];
        else
            return false;
    }
    
    /**
     * Restituisce il codice html estratto dal template del login
     * @return string
     */
    public function processaTemplate() {
        $contenuto=$this->fetch('login.tpl');
        return $contenuto;
    }
    
    
    
   
    
}

?>