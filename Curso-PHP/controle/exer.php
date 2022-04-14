<div class="titulo">exercicio</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1:</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2:</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php

    if(!!$_POST['t1'] && !!$_POST['t2']) echo "TV 50' e sorvete";
    else if(!!$_POST['t1'] || !!$_POST['t2']) echo "TV 32' e sorvete";
    else echo "Ficar em casa";