<?php

class ProdutoController {

    public function cadastrar(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $produto = new Produto();
            $produto->cadastrar($_POST);
            $this->listar();
        }else{
            header('Location: views/produto/cadastrar.php');
        }
    }
    public function listar(){
        $produto = new Produto();
        $_SESSION["produtos"] = $produto->listar();
        header('Location: views/produto/listar.php');
    }
    public function excluir(){
        $produto = new Produto();
        $_SESSION["produtos"] = $produto->excluir($_POST["id"]);
        $this->listar();
    }
    public function alterar(){
        $produto = new Produto();
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $produto = new Produto();
            $produto->alterar($_POST);
            $this->listar();
        }else{
            $_SESSION["produto"] = $produto->buscar($_GET['id']);
            header('Location: views/produto/atualizar.php');
        }
    }
}