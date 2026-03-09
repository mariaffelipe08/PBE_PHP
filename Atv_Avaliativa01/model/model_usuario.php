<?php

require_once "./database/Database.php";

class usuario{
    private $nome;
    private $email;
    private $nomelivro;

    public function __construct($nome, $email, $nomelivro){
        $this->nome= $nome;
        $this->email= $email;
        $this->nomelivro= $nomelivro;
    }

    public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO livro (nome, email, nomelivro) VALUES (:nome, :email, :nomelivro";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nome' => $this->nome, 'email' => $this->email, 'nomelivro' => $this->email]);

    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM livro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar($id){
         $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM livro WHERE id = :id");
        $stmt->execute(['id'=> $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ;
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livro SET nome = :nome, email = :email, nomelivro = :nomelivro WHERE id = :id");
        $stmt->execute(['id' => $id, 'nome' => $this->nome, 'email' =>$this->email,'nomelivro' => $this->nomelivro]);

    }

    public static function excluir($id){
        if(isset($_SESSION['livro'][$id])){
            unsset($_SESSION['livro'][$id]);
        }
    }
}
?> 