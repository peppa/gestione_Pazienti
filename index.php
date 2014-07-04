<!--
File creato da Carlo Centofanti
-->

<?php
require_once 'config/autoload.inc.php';
require_once 'config/config.inc.php';


//$CLogin=  USingleton::getInstance('CLogin');
$CHome= USingleton::getInstance('CHome');
$CHome->visualizzaPagina();       
//$smarty= new Smarty();
/*
global $config;
$smarty->template_dir = $config['smarty']['template_dir'];
$smarty->compile_dir = $config['smarty']['compile_dir'];
$smarty->config_dir = $config['smarty']['config_dir'];
$smarty->cache_dir = $config['smarty']['cache_dir'];
$smarty->caching = false;*/

//sta parte dovrebbe pushare nella home il login fetchato da VLogin... ora va ma non 
//prende i bottoni... boh
//$VLogin= USingleton::getInstance('VLogin');
//$loggato=$CLogin->smista();
/**
if(!$loggato){
    $contenuto=$VLogin->processaTemplate();
    
    $smarty->assign('contenuto', $contenuto);
    $smarty->assign ('messaggio', "non autenticato :(");
    $smarty->display('templateVuoto.tpl');
}
*/

?>