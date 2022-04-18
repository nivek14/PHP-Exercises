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
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Op. Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo string</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string_ex1">String desafio</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=bool">Tipo bool</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis">Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=equacao_ex">Equação exe.</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=var_var">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=var_referencia">Valor referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 03</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">Condicionais If/else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=ope_relacionais">Ope. relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=ope_logicos">Ope. lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=exer">Exercicio</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador ternário</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch_exer">Switch exercicio</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo 04</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=basico">Básico array</a></li>
                        <li><a href="exercicio.php?dir=controle&file=mapa">Mapa</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operacoes">Operações</a></li>
                        <li><a href="exercicio.php?dir=controle&file=multidimensao">Multidimencionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=array_const">Arrays constantes</a></li>
                        <li><a href="exercicio.php?dir=controle&file=get">GET</a></li>
                        <li><a href="exercicio.php?dir=controle&file=post">POST</a></li>
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