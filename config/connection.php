<?php

$host="localhost";
$dbname="Agenda";
$user="root";
$pass="";

try{

    $conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    //ativar modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e){  // serve pra verificar se houve algum erro na conexão  e notificar
    $error=$e->getMessage();
    echo "Error : $error ";

}