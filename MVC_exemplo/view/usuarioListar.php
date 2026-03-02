<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <a href="PBE_PHP/MVC_exemplo/usuario/telaCadastro">Ir para tela cadastrar</a>
    <h2>Usuarios</h2>
    <table border= "1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $id => $u): ?>
        <tr>
            <td><?= $u['nome']?><td>
            <td><?= $u['email']?><td>
            <td>
                <a href= "/PBE_PHP/MVC_exemplo/usuario/telaEditar?id=<?= $id ?>">
                    Editar
                </a>

                <a href="/PBE_PHP/MVC_exemplo/usuario/excluir?id=<?= $id ?>"> 
                    Excluir 
                </a>
            </td>
        </tr>

            <?php endforeach; ?>
        </table>
</body>
</html>