<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário Simples com PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Bem-vindo! Digite suas informações:</h1>
  
  <form action="resultado.php" method="POST">
    <label for="age">Qual sua idade?</label><br>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="usd">Quantos dólares você quer converter para reais?</label><br>
    <input type="number" id="usd" name="usd" step="0.01" required><br><br>
    
    <button type="submit">Enviar</button>
  </form>
</body>
</html>

