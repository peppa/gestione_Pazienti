<!--
File creato da Carlo Centofanti
-->

<?php
require_once 'config/autoload.inc.php';
require_once 'config/config.inc.php';


$CLogin=  USingleton::getInstance('CLogin');
$smarty= new Smarty();

global $config;
$smarty->template_dir = $config['smarty']['template_dir'];
$smarty->compile_dir = $config['smarty']['compile_dir'];
$smarty->config_dir = $config['smarty']['config_dir'];
$smarty->cache_dir = $config['smarty']['cache_dir'];
$smarty->caching = false;

//sta parte dovrebbe pushare nella home il login fetchato da VLogin... ora va ma non 
//prende i bottoni... boh
$VLogin= USingleton::getInstance('VLogin');
$loggato=$CLogin->smista();

if(!$loggato){
    $contenuto=$VLogin->processaTemplate();
    
    $smarty->assign('contenuto', $contenuto);
    $smarty->assign ('messaggio', "non autenticato :(");
    $smarty->display('templateVuoto.tpl');
}



/*
$loggato=$CLogin->smista();
if(!$loggato){
    $smarty->assign ('messaggio', "non autenticato :(");
    
}else $smarty->assign ('messaggio', "loggato!! :)");
*/



/*
    
$session=USingleton::getInstance('USession');
if(!$session->leggi_valore('username')){
    
    //parte che va nella view
    if (isset($_REQUEST['username']))
        $username = $_REQUEST['username'];
    else $username="";

    if (isset($_REQUEST['password']))
        $password = $_REQUEST['password'];
    else$password="";

    if ($CLogin->autentica($username, $password))
            $smarty->assign ( 'messaggio',"autenticato tramite login");
    else$smarty->assign ('messaggio', "non autenticato :("); //ci va l'errore recuperato da clogin mediante get
}else $smarty->assign ('messaggio','autenticato tramite sessione :)');    
    */
//$smarty->display('login.tpl');

?>

