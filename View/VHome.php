<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class VHome extends View{
    
    private $htmlCentrale;
    private $boxLogin;
    
    public function aggiungiLogin(){
        $VLogin=  USingleton::getInstance("VLogin");
        //$VLogin=new VLogin(); //da eliminare
        
        $this->boxLogin=$VLogin->processaTemplate();
    }
    
    public function impostaPaginaNonRegistrato() {
        $this->aggiungiLogin();
    }
    
    public function impostaPaginaMedico() {
        
    }
    
    public function impostaPaginaPaziente() {
        
    }
    
    public function mostraPagina() {
        $this->assign('boxLogin', $this->boxLogin );
        
        $this->display("template_vuoto.tpl");
        
    }
    
    
    
    
    
}
?>