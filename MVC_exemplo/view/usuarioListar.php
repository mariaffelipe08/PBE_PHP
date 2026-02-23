<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h2>Usuarios</h2>
    <a href="listar">Ir para tela cadastrar</a>
    <table border= "1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['nome']?><td>
                <td><?= $u['email']?><td>
                <td>proxima aula<td>
        </tr>

    <?php endforeach; ?>
</body>
</html>