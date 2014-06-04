<!--
File creato da Carlo Centofanti
-->

<?php
require_once 'config/autoload.inc.php';
require_once 'config/config.inc.php';


$CLogin=new CLogin();
$smarty= new Smarty();

global $config;
$smarty->template_dir = $config['smarty']['template_dir'];
$smarty->compile_dir = $config['smarty']['compile_dir'];
$smarty->config_dir = $config['smarty']['config_dir'];
$smarty->cache_dir = $config['smarty']['cache_dir'];
$smarty->caching = false;




    
$session=USingleton::getInstance('Usession');
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
    
$smarty->display('login.tpl');

?>

