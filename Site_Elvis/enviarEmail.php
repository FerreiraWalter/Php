<?php
    include("cabecalho.php");
?>

<form action="#" method="POST">
    <h2>Enviar Email</h2>
    <input type="text" name="subject" placeholder = "Subject">
    <br>
    <textarea class="funcionapls" name="texto" id="" cols="48" rows="20"></textarea>
    <br>
    <button>Enviar</button>
</form>

<a href="indexx.php"><p>Voltar para o Menu Principal</p></a>

<?php

    if(isset($_POST['email'])) {
        $from = 'wferreiraramosjunior@gmail.com';

        $subject = $_POST['subject'];
        $text = $_POST['texto'];
    
        $conexao = mysqli_connect("localhost", "root", "", "makemeelvis");
    
        $query = "SELECT * FROM cadastros";
        $resultado = mysqli_query($conexao, $query) or die("Erro ao consultar o Banco de Dados");
        
        while($row = mysqli_fetch_array($resultado)) {
            $first_name = $row['prinome'];
            $last_name = $row['ultnome'];
    
            $msg = "Querido $first_name $last_name, \n $text";
            $to = $row['email'];
            //mail($to, $subject, $msg, 'From:' . $from);
    
            echo "Email enviado para $to <br />";
        }
    
        mysqli_close($conexao);

    }


