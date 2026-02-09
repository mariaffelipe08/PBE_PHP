<?php
    session_start();

    class Usuario{
        private $nome;
        private $sobrenome;
        private $nota;
        private $datanascimento
        public function __construct($nome, $email, $senha){
            $this->nome= $nome;
            $this->email= $email;
            $this->senha= $senha;
        }
    }


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
</head>
<body>
    <h2 style="color:darkblue; front-family:Arial"> Cadastro de Alunos</h2>
    <form action= " "method="POST" style="background:#f2f2f2; padding:15px border-radius:8px; width: 300px">
        Nome: <br>
        <input type="text" name="nome" value=" " style= "width:100%;margin-bottom;10px"><br>
        Sobrenome:<br>
        <input type= "sobrenome" name="sobrenome" value=" " style= "width:100%; margin-bottom;10px"><br>
        Nota:<br>
        <input type= "password" name="nota" value= " " style="width:100%;margin-bottom: 10px"><br>
        Data_Nascimento:<br>
        <input type= "password" name= "data nascimento" value= " " style= "width:100%;margin-bottom:10px"><br>
        <button type="submit" style="backgroud":green; color: green; padding: 5px 10px;>Cadastrar</button>
        <button type= "reset" style= "background":red; color:white; padding: 5px 10px; >Limpar</button>
</form>

<?php endif; ?>
</body>

</html>