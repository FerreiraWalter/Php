<?php 
    include("cabecalho.php");
?>

<form action="#" method="POST">
    <h2>Excluir Email</h2>
    <input type="email" name="email" placeholder="Email">
    <br>
    <button>Excluir</button>
    <button name="clique">Clientes</button>

</form>

<a href="indexx.php"><p>Voltar para o Menu Principal</p></a>

<?php

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $conexao = mysqli_connect("localhost", "root", "", "makemeelvis");

        $query_lista = "SELECT * FROM cadastros";
        $resultado_lista = mysqli_query($conexao, $query_lista);
    
        while($row = mysqli_fetch_array($resultado_lista)) {
            echo $row['prinome'] . " " . $row['ultnome'] . " - ". $row['email'] . "<br />";
        }

        if(empty($email)) {
            echo "Campo vazio, não foi Excluido nenhum email";
        } else {
            $query_delete = "DELETE FROM cadastros WHERE email = '{$email}'";
            $resultado_delete = mysqli_query($conexao, $query_delete);
        }

    }

