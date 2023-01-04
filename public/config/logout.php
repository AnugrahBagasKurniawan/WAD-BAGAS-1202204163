<?php 
session_start();
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('nama', '', time() - 3600);

header("Location : ../Login-Bagas.php");
exit;
?>