<div class="titulo">Tipo string</div>

<?php

    echo 'Exemplo de string', '<br>';
    var_dump('string');
    echo '<br>';

    // concatenação
    echo "string" . " mais string", '<br>';

    // funções
    echo '<br>' . strtoupper('teste');
    echo '<br>' . strtolower('teste');
    echo '<br>' . ucfirst('teste');
    echo '<br>' . ucwords('teste');
    echo '<br>' . strlen('teste');
    echo '<br>' . mb_strlen('teste', 'utf-8');
    echo '<br>' . substr('teste', 1, 3);
    echo '<br>' . str_replace('isso', 'aquilo', 'teste');