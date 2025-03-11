<?php 

    include "../components/baseHTML.php";
    include "../components/baseScriptsHTML.php";

?>

    <main>

    <form action="../scripts/cadastro.php" method="post">

    <input placeholder="Digite seu nome:" type="text" id="nome" name="nome">
    <input placeholder="Digite seu email:" type="email" id="email" name="email">
    <input placeholder="Digite sua senha:" type="password" id="senha" name="senha">

    <button type="submit">Cadastro</button>
   

    </form>


    </main>