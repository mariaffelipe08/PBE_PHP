<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <a href="PBE_PHP/Atv_Avaliativa/livro/telaCadastro">Ir para tela cadastrar</a>
    <h2>livros</h2>
    <table border= "1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Nomelivro</th>
        </tr>
        <?php foreach ($livros as $id => $u): ?>
        <tr>
            <td><?= $u['NOME']?><td>
            <td><?= $u['EMAIL']?><td>
            <td><?= $u['NOMELIVRO']?><td>
            <td>
                <a href= "/PBE_PHP/?id=?id<?= $u['ID']?>">
                    Editar
                </a>

                <a href="/PBE_PHP/?id=<?= $u['ID']?>"> 
                    Excluir 
                </a>
            </td>
        </tr>

            <?php endforeach; ?>
        </table>
</body>
</html>