<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class VHome extends View{
    
    private $htmlCentrale;
    private $boxlogin;
    
    public function aggiungiLogin(){
        $VLogin=  USingleton::getInstance("VLogin");
        $VLogin=new VLogin();
        
        return $this->htmlCentrale=$VLogin->processaTemplate();
    }
    
    public function impostaPaginaNonRegistrato() {
        $this->boxlogin=$this->aggiungiLogin();
    }
    
    public function impostaPaginaMedico() {
        
    }
    
    public function impostaPaginaPaziente() {
        
    }
    
    public function mostraPagina() {
        $this->display("empty.tpl");
        
    }
    
    
    
    
    
}
?>