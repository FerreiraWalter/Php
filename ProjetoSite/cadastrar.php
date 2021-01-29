<?php
    require_once 'usuarios.php';
    $u = new Usuario; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>
<body>
    <div id="corpo-form">
        <h1>Cadastrar</h1>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome Completo" maxlenght="30">
            <input type="text" name="telefone" placeholder="Telefone" maxlenght="30">
            <input type="email" name="email" placeholder="Usuário" maxlenght="40">
            <input type="password" name="senha" placeholder="Senha"maxlenght="15">
            <input type="password" name="Confsenha" placeholder="Confirmar Senha" maxlenght="15">

            <input type="submit" value="CADASTRAR">

            <a href="central.php">Já tem uma conta? <strong>Clique aqui</strong></a>
        </form>
    </div>

</body>
</html>

<?php
    //verificar se clicou no botão
    if(isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['Confsenha']);

        if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conectar("projeto_login", "localhost", "root", "");
            
            if($u->msgErro == "") {
                if($senha == $confirmarSenha){
                    if ($u->cadastrar($nome, $telefone, $email, $senha)) {
                        echo "Cadastrado com sucesso!";
                    } else {
                        echo "Email já cadastrado";
                    }
                } else {
                    echo "Senhas não correspondem!";
                }
            } else {
                echo "Erro:" .$u->msgErro;
            }
            
        } else {
            echo "Preencha todos os campos!";
        }

    }

?>