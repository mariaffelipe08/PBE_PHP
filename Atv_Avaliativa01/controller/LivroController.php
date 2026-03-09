<?php

session_start();
require_once "./Model/model_usuario.php";

class LivroController{

    public function telaCadastro(){
        require"View/livroCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $nomelivro = $_POST['nomelivro'];
        
        $livro = new Livro($nome, $email);
        $livro ->salvar();
        header ('Location: /PBE_PHP/Atv_Avaliativa01/livro/telaCadastro');
        exit;
    }
    public function listarListarlivros(){
        $usuarios= Usuario::listar();
        echo "<pre>";
        require 'View/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro::buscar($_GET['id']);
        require 'View/livroEditar.php';
    }

    public function atualizar(){
        $livro = new Livro($_POST['nome'], $_POST['email'], $_POST['nomelivro']);
        $livro->atualizar($_GET['id']);
        header('Location: /PBE_PHP/Atv_Avaliativa01/livro/telaEditar?id='.($_GET['id']));
        exit;
    }

    public function excluir(){
        Livro::excluir($_GET['id']);
        header('Location: /PBE_PHP/Atv_Avaliativa01/livro/listar');
        exit;
    }


}