<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styless.css">
    <title>Home Buzzed - Drinks</title>
</head>
<body>

    <header>
        <nav>
            <a href="index.php?menu=adicionardrink">
               <button type="button">ADICIONAR DRINK</button>
            </a>
        </nav>
    </header>

    <h1>VOCÊ ESTÁ NO HOME BUZZED</h1>
    <h2>Confira nossa lista de drinks!</h2>

   
    <section class="about-us">
        <h2>A História da Buzzed</h2>
        <p>A Buzzed nasceu com o objetivo de transformar qualquer momento em uma experiência inesquecível, criando drinks incríveis que combinam sabor, criatividade e paixão.</p>
        <p>Fundada por amantes de coquetéis, nossa empresa foi inspirada pela busca incessante por novas combinações e sabores únicos. Nossa missão é oferecer aos nossos clientes não apenas uma bebida, mas uma verdadeira viagem sensorial.</p>
        <p>Aqui na Buzzed, cada drink é preparado com ingredientes selecionados e um toque especial de inovação. Se você está buscando algo refrescante para um happy hour ou algo mais sofisticado para uma noite especial, temos a opção perfeita para você. Venha descobrir o prazer de saborear drinks feitos com amor e expertise!</p>
    </section>

    <div class="drinks-list">
        <?php
        
        $conexao = mysqli_connect("localhost", "root", "", "drink");

        if (!$conexao) {
            die("Falha na conexão: " . mysqli_connect_error());
        }

        
        $sql = "SELECT * FROM drinks";
        $query = mysqli_query($conexao, $sql);

       
        if (mysqli_num_rows($query) > 0) {
           
            while ($dados = mysqli_fetch_assoc($query)) {
                ?>
                <div class="drink-card">
                    <div class="drink-image">
                        <?php if (!empty($dados['imagem'])) { ?>
                            <img src="<?= $dados['imagem']; ?>" alt="Imagem do Drink">
                        <?php } else { ?>
                            <img src="image/sem-imagem.jpg" alt="Sem Imagem">
                        <?php } ?>
                    </div>
                    <div class="drink-details">
                        <h3><?= $dados['nome']; ?></h3>
                        <p><strong>Descrição:</strong> <?= $dados['descricao']; ?></p>
                        <p><strong>Categoria:</strong> <?= $dados['categoria']; ?></p>
                        <p><strong>Tem Álcool?</strong> <?= $dados['tem_alcool'] ? 'Sim' : 'Não'; ?></p>
                        <p><strong>Valor:</strong> R$ <?= number_format($dados['valor'], 2, ',', '.'); ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>Nenhum drink encontrado.</p>";
        }

      
        mysqli_close($conexao);
        ?>
    </div>

</body>
</html>
