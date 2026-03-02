<?php

session_start(); //banco de dados
require_once "./Model/model_controller.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $preço =$_POST['preço'];
        $quantidade =$_POST['quantidade'];
       
        $produto = new Produto($nome, $valor, $quantidade);
        $produto ->salvar();
        header ('Location: /PBE_PHP/MVC_exemplo/usuario/telaCadastro');
        exit;
    
    }

    public function listarProdutos(){
        $produtos= Produto::listar();
        echo "<pre>";
        print_r($produto);
        echo"</pre>";
        require 'View/usuarioListar.php';
    }

    public function telaEditar(){
        $produto = Produto::buscar($_GET['id']); 
        require 'View/produtoEditar.php';
    }

    public function atualizar(){
        $produto = new Produto($_POST['nome'],$_POST['valor'],$_POST['valor'] );
        $produto-> atualizar ($_GET['id']);
        header('Location: PBE_PHP/Atividade01/produto/listar'); 
        exit;
    }

    public function excluir (){
    Produto:: excluir($_GET['id']);
    header('Location: PBE_PHP/Atividade01/produto/listar'); 
        exit;
    }

