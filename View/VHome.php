<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class VHome extends View{
    
    private $htmlCentrale;
    private $_boxlogin;
    
    public function aggiungiLogin(){
        $VLogin=  USingleton::getInstance("VLogin");
        $VLogin=new VLogin();
        
        $this->_boxlogin=$VLogin->processaTemplate();
        
        
    }
    
    public function impostaPaginaNonRegistrato() {
        $this->aggiungiLogin();
    }
    
    public function impostaPaginaMedico() {
        
    }
    
    public function impostaPaginaPaziente() {
        
    }
    
    public function mostraPagina() {
        $this->assign('contenuto', $this->_boxlogin );
        
        $this->display("template_vuoto.tpl");
        
    }
    
    
    
    
    
}
?>