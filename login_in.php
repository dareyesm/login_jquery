<?php

require 'class/database.php';
$objData = new DataBase();
require 'class/sessions.php';
$objSess = new Session();

if(isset($_POST['nuser'])){
    $usuario = $_POST['nuser'];
    $clave = $_POST['puser'];
}
$sth = $objData->prepare('SELECT idUser, naUser, paUser FROM users '
    . 'where naUser = :naUser and paUser = :paUser');
$sth->bindParam(':naUser', $usuario);
$sth->bindParam(':paUser', $clave);

$sth->execute();

$result = $sth->fetchAll();

if($sth->rowCount() > 0 ){
    $objSess->init();
    $objSess->set('idUser', $result[0]['idUser']);
    $objSess->set('naUser', $result[0]['naUser']);
    echo "Usuario encontrado";
    //header('location: otra.php');
    
}else{
    echo "Usuario No encontrado";
}
