<?php

/*
 * File creato da Carlo Centofanti
 */


public function registraPaziente(){
    $VRegistrazione=  USingleton::getInstance("VRegistrazione");
    $VRegistrazione= new VRegistrazione();//da eliminare
    
    
    
    
}



public function smista(){
    $VRegistrazione=  USingleton::getInstance("VRegistrazione");
    $task=$VRegistrazione->getTask();
    
    switch ($task) {
        case 'boh':
            return 0;
         
                


        default:
            return $this->registraPaziente();
    }
}
?>