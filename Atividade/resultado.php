<?php
  // Receber os dados do formulário
  $age = isset($_POST['age']) ? intval($_POST['age']) : 0;
  $usdValue = isset($_POST['usd']) ? floatval($_POST['usd']) : 0;

  // Cotação do dólar (fixo para simplificar)
  $dollarRate = 5.77;
  $convertedValue = $usdValue * $dollarRate;

  // Gerar um número aleatório entre 1 e 100
  $randomNumber = rand(1, 100);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Resultados</h1>

  <div id="ageResult">
    <h2>Verificação de Idade:</h2>
    <?php
      if ($age >= 18) {
        echo "<p>Você tem 18 anos ou mais! Pode continuar.</p>";
      } else {
        echo "<p>Você precisa ter 18 anos ou mais.</p>";
      }
    ?>
  </div>

  <div id="randomNumber">
    <h2>Número Aleatório:</h2>
    <p>O número aleatório gerado é: <?php echo $randomNumber; ?></p>
  </div>

  <div id="dollarRate">
    <h2>Cotação de Dólar para Real:</h2>
    <p>O valor de <?php echo $usdValue; ?> dólares é igual a R$ <?php echo number_format($convertedValue, 2, ',', '.'); ?> reais.</p>
  </div>

</body>
</html>

