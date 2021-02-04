<?php
    include("cabecalho.php");
?>
<h2>CADASTRO</h2>

<div class="tudojunto">
    <form action="" method="POST">
        <input type="text" name="priNome" placeholder="Your First Name">
        <input type="text" name="ultNome" placeholder="Your Last Name">
        <input class="email" type="email" name="email" placeholder="email">
        <br>
        <button>Cadastrar</button>

    </form>
</div>

<?php

    function escreverSQL($conexao) {

    }

    if(isset($_POST['email'])) {
        $priNome = addcslashes($_POST['priNome']);
        $ultNome = addcslashes($_POST['ultNome']);
        $email = addcslashes($_POST['email']);

        $conexao = mysqli_connect("localhost", "root", "", "MakeMeElvis");

        $sql = mysqli_query($conexao, "SELECT * FROM var WHERE email = '{$email}'") or die("ERRO");
    }
