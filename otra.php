<?php

require 'class/sessions.php';
$objSess = new Session();

$objSess->init();

echo $objSess->get('naUser');

echo '<br><a href="log_out.php">Salir</a>';

