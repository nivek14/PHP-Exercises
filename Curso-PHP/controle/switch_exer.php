<div class="titulo">switch exercicio</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > MILHA</option>
        <option value="milha-km">MILHA > KM</option>
        <option value="metro-km">METROS > KM</option>
        <option value="km-metro">KM > METROS</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php

    $value = $_POST['param'] ?? 0;
    $option = $_POST['conversao'];

    switch($option){
        case "km-milha":
            $value = $value * 0.621371;
            break;
        case "milha-km":
            $value = $value * 1.609344;
            break;
        case "metro-km":
            $value = $value / 1000;
            break;
        case "km-metro":
            $value = $value / 0.001;
            break;
        default:
            echo "valor inválido"
            break;
    }

    echo "$option: $value";