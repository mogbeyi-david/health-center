<?php
$_SESSION = array();
session_unset();
session_abort();
session_destroy();
header("location:../../index.php");
?>
