<?php

$nome = $_GET['nome'];
$Sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$confirmarSenha = $_GET['confirmarSenha'];
$comoConheceu = $_GET['comoConheceu'];
$nascimento = $_GET['nascimento'];
$jogoEscolhido = $_GET['jogoEscolhido'];
$termo = $_GET['termo'];
$indicar = $_GET['indicar'];
$experiencia = $_GET['experiencia'];
$sugestao = $_GET['sugestao'];

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
        <a href="/index.html" class="nav-item">Home</a>
        <a href="/cadastro.html" class="nav-item">Cadastro</a>
        <a href="/vetores.html" class="nav-item">Vetores</a>
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
                    <br>
                    <strong>Sobrenome: </strong>
                    <span>
                        <?php echo strtoupper($Sobrenome); ?>
                    </span>
                    <br>
                    <strong>E-mail: </strong>
                    <span>
                        <?php echo strtoupper($email); ?>
                    </span>
                    <br>
                    <strong>Senha: </strong>
                    <span>
                        <?php echo $senha; ?>
                    </span>
                    <br>
                    <strong>Confirmar Senha: </strong>
                    <span>
                        <?php echo $confirmarSenha; ?>
                    </span>
                    <br>
                    <strong>Como conheceu: </strong>
                    <span>
                        <?php echo strtoupper($comoConheceu); ?>
                    </span>
                    <br>
                    <strong>Quando nasceu: </strong>
                    <span>
                        <?php echo strtoupper($nascimento); ?>
                    </span>
                    <br>
                    <strong>Jogo Escolhido: </strong>
                    <span>
                        <?php echo strtoupper($jogoEscolhido); ?>
                    </span>
                    <br>
                    <strong>Probabilidade de indicação</strong>
                    <span>
                        <?php echo $indicar; ?>%
                    </span>
                    <br>
                    <strong>Experiência:</strong>
                    <span>
                        <?php echo $experiencia; ?>
                    </span>
                    <br>
                    <strong>Sugestão:</strong>
                    <span>
                        <?php 
                        if(strtoupper($sugestao) == null){
                            echo strtoupper('Sem sugestão');
                        } else {
                            echo strtoupper($sugestao);
                        }
                        ?>
                    </span>
                    <br>
                    <span>
                        <?php 
                        if(strtoupper($termo) == 'ON'){
                            echo 'Leu e aceitou';
                        } else {
                            echo 'Não aceitou o termo';
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>