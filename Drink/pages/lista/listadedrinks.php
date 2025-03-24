<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Lista de Drinks</title>
   
       
    
</head>
<body>

<h1>VOCÊ ESTÁ NA LISTA DE DRINKS</h1>

<table>
    <tr>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Tem Álcool?</th>
    </tr>

    <?php
    // Certifique-se de que a conexão com o banco está funcionando antes
    $sql = "SELECT * FROM drinks";
    $query = mysqli_query($conexao, $sql) or die("ERRO NA REQUISIÇÃO! " . mysqli_error($conexao));

    while ($dados = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td>
                <?php if (!empty($dados['image'])) { ?>
                    <img src="<?= $dados['image']; ?>" alt="Drink">
                <?php } else { ?>
                    <img src="sem-imagem.jpg" alt="Sem Imagem">
                <?php } ?>
            </td>
            <td><?= $dados['nome'] ?></td>
            <td><?= $dados['descrição'] ?></td>
            <td><?= $dados['categoria'] ?></td>
            <td><?= $dados['tem_alcool'] ? 'Sim' : 'Não' ?></td>
        </tr>

    <?php } ?>
</table>

</body>
</html>
