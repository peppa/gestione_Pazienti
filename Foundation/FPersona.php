<?php

/*
 * File creato da Carlo Centofanti
 */

/**
 * Fpersona è lo strato foundation di persona. si occupa di interagire con il db
 * e sa recuperare e salvare oggetti EPersona nel db
 *
 * @access public
 * @package Foundation
 * @author Carlo
 */
class FPersona extends Fdb {
    public function __construct() {
        $this->_table='persona';
        $this->_key='username';
        $this->_return_class='EPersona';
        USingleton::getInstance('Fdb');
    }
}

?>