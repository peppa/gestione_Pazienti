<!--
File creato da Carlo Centofanti
-->

<?php
require_once 'lib/smarty/Smarty.class.php';
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




$smarty->display('login.tpl');

//parte che va nella view
if (isset($_REQUEST['username']))
    $username = $_REQUEST['username'];
else $username="vuoto";

if (isset($_REQUEST['password']))
    $password = $_REQUEST['password'];
else$password="vuoto";

if ($CLogin->autentica($username, $password))
        echo "autenticato";
else echo "non autenticato :(";
        
?>

