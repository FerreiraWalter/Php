<?php
    include("cabecalho.php");
?>

<formaction="#" method="POST">
    <h2>Enviar Email</h2>
    <input type="email" name="email" placeholder = "Your Email">
    <br>
    <textarea class="funcionapls" name="texto" id="" cols="40" rows="20"></textarea>
    <br>
    <button>Enviar</button>
</form>

<a href="indexx.php"><p>Voltar para o Menu Principal</p></a>

<?php


        $from = 'wferreiraramosjunior@gmail.com';
        $objetivo = $_POST['texto'];
    
        $conexao = mysqli_connect("localhost", "root", "", "makemeelvis");
    
        $query = "SELECT * FROM cadastros";
        $resultado = mysqli_query($conexao, $query);
    
        $row = mysqli_fetch_array($resultado);
        echo $row['prinome'] . ' ' . $row['email'];
        $row = mysqli_fetch_array($resultado);
        echo $row['prinome'] . ' ' . $row['email'];

