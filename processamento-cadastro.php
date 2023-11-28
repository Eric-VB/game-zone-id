<?php

$nome = $_GET['nome'];
$jogoEscolhido = $_GET['jogoEscolhido'];

/**
 * Operação de vetores
 */

// $listaDeCompras = [];

// // Adicionando itens a ultima posicao do array
// $listaDeCompras[] = 'FIFA';
// $listaDeCompras[] = 'Avatar';

// // Mostrar a quantidade de itens da lista
// echo count($listaDeCompras);

// // Mostrando os itens da lista de compras
// for ($i = 0; $i < count($listaDeCompras); $i++) {
//     $item = $listaDeCompras[$i];
//     echo $item;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/processamento.css">
</head>
<body>
    <header>
        <img src="img/logo.jpg" alt="logo-1" id="logo-1">
        <img src="img/logo.png" alt="logo-2">
    </header>
    <nav>
        <a href="" class="nav-item">Home</a>
        <a href="" class="nav-item">Cadastro</a>
        <a href="" class="nav-item">Página 3</a>
    </nav>
    <main>
        <h1>
            Resultado
        </h1>
        <hr />
        <div class="conteudo">

            <div class="revisao">
                <div>
                    <strong>Nome: </strong>
                    <span>
                        <?php echo strtoupper($nome); ?>
                    </span>
                </div>
            </div>



        </div>
    </main>
</body>
</html>