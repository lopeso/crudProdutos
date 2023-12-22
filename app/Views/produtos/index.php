<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?= $titulo?> </h1>

    <table>
        <tr>
            <thead>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Valor de Compra </th>
                <th> Valor de venda </th>
                <th> quantidade </th>
                <th> validade </th>
            </thead>
        </tr>
            <tbody>
                <?php foreach($produtos as $produto): ?>
                    <tr>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['descricao'] ?></td>
                        <td><?= $produto['valor_de_compra'] ?></td>
                        <td><?= $produto['valor_de_venda'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                        <?php if($produto['validade'] == ""): ?>
                            <td>"produto sem validade"</td>

                        <?php else: ?>
                            <td><?= $produto['validade'] ?></td>
                        <?php endif; ?>
                        </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</body>
</html>