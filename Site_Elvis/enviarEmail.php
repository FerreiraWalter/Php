<?php
    include("cabecalho.php");
?>

<formaction="#" method="POST">
    <h2>Enviar Email</h2>
    <input type="email" placeholder = "Your Email">
    <br>
    <textarea class="funcionapls" name="texto" id="" cols="40" rows="20"></textarea>
    <br>
    <button>Enviar</button>
</form>

<a href="indexx.php"><p>Voltar para o Menu Principal</p></a>

<?php

    if(isset($_POST['texto'])) {
        $from = 'wferreiraramosjunior@gmail.com';
        $objetivo = $_POST['texto'];

        $query = "SELECT * FROM cadastros";

    }

    