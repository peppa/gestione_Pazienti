<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class VHome extends View{
    
    private $htmlCentrale;
    
    public function aggiungiLogin(){
        $VLogin=  USingleton::getInstance("VLogin");
        $VLogin=new VLogin();
        
        $this->htmlCentrale=$VLogin->processaTemplate();
    }
    
    public function caricaPaginaNonRegistrato() {
        
    }
    
    public function caricaPaginaMedico() {
        
    }
    
    public function caricaPaginaPaziente() {
        
    }
    
    public function mostraPagina() {
        $this->display("template_vuoto.tpl");
        
    }
    
    
    
    
    
}
?>