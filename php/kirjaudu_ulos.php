<?php

session_start();
unset ($_SESSION['kayttaja'] );
session_destroy();
header ('location:kirjaudu.php');

?>