<?php include("cabecalho.php"); ?>
    <h1>Formulário produto</h1>
    <form action="adiciona-produto.php" method="get">
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>

            <tr>
                <td>Preço:</td>
                <td><input class="form-control" type="number" name="preco"></td>
            </tr>

            <tr>
                <td>
                    <button class="btn btn-primary">Cadastrar</button>
                </td>
            </tr>
        </table>

    </form>
<?php include("rodape.php"); ?>