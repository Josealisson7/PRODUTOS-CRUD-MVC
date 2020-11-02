<?php
require_once "routes/routes.php";
require_once "controller/HomeController.php";

/* VERIFICA A URI E CARREGA A TELA PRINCIPAL */

$uri = explode('/',$_SERVER["REQUEST_URI"]);
$quantidadePosicoesUri = count($uri);
$ultimaPosicaoUri = $quantidadePosicoesUri - 1;
$urn = $uri[$ultimaPosicaoUri];

if($urn == "" || $urn == "index.php"){
    $homeController = new HomeController();
    $homeController->index();
}
