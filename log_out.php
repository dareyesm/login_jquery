<?php

require 'class/sessions.php';
$objSess = new Session();

$objSess->init();
$objSess->destroy();

header('location: index.html');