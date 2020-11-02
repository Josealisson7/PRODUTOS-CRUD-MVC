<?php
require_once "controller/ProdutoController.php";
require_once "model/Produto.php";

/* ROTAS DA APLICAÇÃO */

if(isset($_GET["route"])){
    if($_GET["route"] == "produto/cadastrar"){
        $produtoController = new ProdutoController();
        $produtoController->cadastrar();
    }elseif ($_GET["route"] == "produto/atualizar"){
        $produtoController = new ProdutoController();
        $produtoController->alterar();
    }elseif ($_GET["route"] == "produto/excluir"){
        $produtoController = new ProdutoController();
        $produtoController->excluir();
    }elseif ($_GET["route"] == "produto/listar"){
        $produtoController = new ProdutoController();
        $produtoController->listar();
    }
}
