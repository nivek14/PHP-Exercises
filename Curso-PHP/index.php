<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>índice dos exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basic&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basic&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basic&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basic&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo float</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y');?>
    </footer>
</body>
</html>