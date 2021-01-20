<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" id="estado">
        <option value="BA">Bahia</option>
        <option value="SE">Sergipe</option>
    </select>

    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1rem;
    }
</style>

<?php

print_r($_POST);
