<?php
session_start();

class Produto {

    public function cadastrar($produto){
        if(!isset($_SESSION["db_produtos"])){
            $_SESSION["db_produtos"] = [];
        }
        $id = count($_SESSION["db_produtos"]) + 1;
        $produto['id'] = $id;
        array_push($_SESSION["db_produtos"], $produto);
    }
    public function excluir($id){
        foreach ($_SESSION["db_produtos"] as $index => $produto){
            if($produto['id'] == $id){

                unset( $_SESSION["db_produtos"][$index]);
                return;
            }
        }
    }
    public function listar(){
        return $_SESSION["db_produtos"];
    }
    public function buscar($id){
        foreach ($_SESSION["db_produtos"] as $produto){
            if($produto["id"] == $id){
                return $produto;
            }
        }
    }
    public function alterar($produtos){
        foreach ($_SESSION["db_produtos"] as $index => $produto){
            if($produto["id"] == $produtos['id']){
                unset($_SESSION["db_produtos"][$index]);
                array_push($_SESSION["db_produtos"], $produtos);
                return;
            }
        }
    }
}