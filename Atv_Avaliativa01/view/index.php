<?php

require_once "Controller/LivroController.php";

$LivroController = new LivroController();
$route = $_GET["route"] ?? '';

switch($route){
    case 'livro/telaCadastro':
        $livroController->telaCadastro();
        break;
    
    case "livro/salvar":
        $livroController->cadastrar();
        break;

    case "livro/listar":
        $livroController->listarLivros();
        break;

    case "livro/atualizar":
        $livroController->atualizar();
        break;

    case "livro/excluir":
        $livroController->excluir();
        break;

        
    default:
        echo "Pagina não encontrada";
        break;
}

