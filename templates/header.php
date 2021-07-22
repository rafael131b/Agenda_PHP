<?php
include_once("config/url.php");
include_once("config/process.php");

//limpa a mensagem;
if(isset($_SESSION["msg"])){
    $printMsg=$_SESSION["msg"];
    $_SESSION["msg"]="";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- bootstrap -->
        <link rel="stylesheet" href="<?=$BASE_URL?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- css -->
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="<?=$BASE_URL?>index.php" class="navbar-brand"> <img src="<?=$BASE_URL?>img/logo.svg" alt="Agenda" >
        </a>

        <div>
            <div class="navbar-nav">
                <a   class="nav-link active" id="home-link" href="<?=$BASE_URL?>index.php">Agenda</a>
                <a   class="nav-link active"  href="<?=$BASE_URL?>create.php">Adicionar Contato</a>


            </div>
        </div>
    </nav>

    </header>