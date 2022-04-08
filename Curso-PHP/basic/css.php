<div class="titulo">Integração HTML</div>

<h1 center>
    <?php 
        echo 'olá';
        echo '<small> php</small>';
    ?>
</h1>

<?= "<div>outro tipo de teste</div>"?>

<style>
    
    button {
        padding: 5px <? 2 * 10 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }


</style>