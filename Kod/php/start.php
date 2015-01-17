<?php
require_once("top.php");


?>
<?php if(empty($_SESSION['register_complete'])): ?>
Hello
<?php elseif($_SESSION['register_complete'] == true): ?>
Registreringen Lyckades
<?php elseif($_SESSION['register_complete'] == false): ?>
Registreringen misslyckades
<?php
endif;
$_SESSION['register_complete'] = null;
?>


<?php
require_once("bottom.php");
?>