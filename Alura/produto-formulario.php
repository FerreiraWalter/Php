<?php include("cabecalho.php") ?>
            <h1>Formulário produto</h1>
            <form action="adiciona-produto.php" method="get">
                <label for="nome">Nome: </label>
                <input type="text" name="nome">
                <label for="preco">Preço: </label>
                <input type="number" name="preco">

                <button>Cadastrar</button>

            </form>
<?php include("rodape.php") ?>