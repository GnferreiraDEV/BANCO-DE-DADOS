<?php

    include("config.php");

    $conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) OR DIE("ERRO NA CONEXÃO COM O SERVIÇO!".mysqli_connect_error());

?>