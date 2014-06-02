<!--
File creato da Carlo Centofanti
-->

<?php
require_once 'config/autoload.inc.php';
require_once 'config/config.inc.php';

$CLogin=new CLogin();
if ($CLogin->autentica('Mellgood', '0000'))
        echo "autenticato";
else echo "non autenticato :(";
        
?>

