<?php
    include("cabecalho.php");
?>
<h2>CADASTRO</h2>

<div class="tudojunto">
    <form action="#" method="POST">
        <input type="text" name="priNome" placeholder="Your First Name">
        <input type="text" name="ultNome" placeholder="Your Last Name">
        <input class="email" type="email" name="email" placeholder="email">
        <br>
        <button>Cadastrar</button>
    </form>
</div>

<a href="indexx.php"><p>Voltar para o Menu Principal</p></a>

<?php

    function escreverSQL($conexao, $priNome, $ultNome, $email) {
        $query = "INSERT INTO cadastros(prinome, ultnome, email) VALUES ('{$priNome}', '{$ultNome}', '{$email}')";
        return mysqli_query($conexao, $query);
    }

    if(isset($_POST['email'])) {
        $priNome = $_POST['priNome'];
        $ultNome = $_POST['ultNome'];
        $email = $_POST['email'];

        $conexao = mysqli_connect("localhost", "root", "", "MakeMeElvis");

        $sql = mysqli_query($conexao, "SELECT * FROM cadastros WHERE email = '{$email}'") or print mysql_error();
        
        if(mysqli_num_rows($sql) > 0) {
            echo "ESSE EMAIL JÁ FOI REGISTRADO";
        } else {

            if(!empty($_POST['priNome']) && !empty($_POST['ultNome']) && !empty($_POST['email'])) {
                escreverSQL($conexao, $priNome, $ultNome, $email);
                echo "CADASTRO FEITO COM SUCESSO";
            } else {
                echo "ESTÁ FALTANDO INFORMAÇÃO";
            }
        }
    }

