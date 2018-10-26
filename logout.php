<?php

require_once('./config/twigLoad.php');

session_start();
session_unset();
session_destroy();

render('index.html',array());

?>
