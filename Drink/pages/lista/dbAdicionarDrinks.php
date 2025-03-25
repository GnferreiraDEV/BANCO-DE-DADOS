<?php

$conexao = mysqli_connect("localhost", "root", "", "drink");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}


if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    
    $diretorio = "image/";

  
    $arquivo_temporario = $_FILES['imagem']['tmp_name'];
   
    $nome_arquivo = basename($_FILES['imagem']['name']);
    $caminho_imagem = $diretorio . $nome_arquivo;

    
    if (move_uploaded_file($arquivo_temporario, $caminho_imagem)) {
        echo "Imagem enviada com sucesso!";
    } else {
        die("Erro ao mover o arquivo para o diretório.");
    }
} else {
    die("Erro: Nenhuma imagem foi enviada ou houve um problema no envio.");
}


$nome = isset($_POST['nome']) ? mysqli_real_escape_string($conexao, $_POST['nome']) : '';
$descricao = isset($_POST['descricao']) ? mysqli_real_escape_string($conexao, $_POST['descricao']) : '';
$categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($conexao, $_POST['categoria']) : '';
$tem_alcool = isset($_POST['tem-alcool']) ? mysqli_real_escape_string($conexao, $_POST['tem-alcool']) : '';
$valor = isset($_POST['valor']) ? mysqli_real_escape_string($conexao, $_POST['valor']) : '';


$sql = "INSERT INTO drinks (imagem, nome, descricao, categoria, tem_alcool, valor) 
        VALUES ('$caminho_imagem', '$nome', '$descricao', '$categoria', '$tem_alcool', '$valor')";

if (mysqli_query($conexao, $sql)) {
    echo "O Drink ($nome) foi adicionado com sucesso!";
} else {
    echo "Erro ao adicionar o drink: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
