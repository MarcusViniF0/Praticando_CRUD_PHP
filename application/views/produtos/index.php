<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <title>Produtos</title>

<body>
      <div class="conteainer">
        <h1>Produtos</h1>
        <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?=$produto['nome'] ?></td>
            <td><?=$produto['descricao'] ?></td>
            <td><?=$produto['preco'] ?></td>
        </tr>
        <?php endforeach?> 
        </table>
 </div>
</body>
</html>