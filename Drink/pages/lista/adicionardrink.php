<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Adicionar Novo Drink</title>
 
</head>
<body>

    <div class="container">
        <h1>Adicionar um Novo Drink</h1>
        <form action="index.php?menu=dbAdicionarDrinks" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="imagem">Imagem</label>
                <input type="file" id="imagem" name="imagem">
            </div>

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" id="categoria" name="categoria" required>
            </div>

            <div class="form-group">
                <label for="tem-alcool">Tem Álcool?</label>
                <select id="tem-alcool" name="tem-alcool" required>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <div class="form-group">
                <label for="valor">Valor (R$)</label>
                <input type="number" id="valor" name="valor" step="0.01" required>
            </div>

            <button type="submit">Cadastrar</button>

        </form>
    </div>

</body>
</html>
