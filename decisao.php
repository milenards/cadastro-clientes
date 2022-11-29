<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadsatro de clientes</title>
</head>

<body>
    <h1>Cadastro de clientes</h1>
    <?php
    $nome = "Millena";
    $idade = 22;
    $fumante = false;
    $nota = 8;

    echo "<p>Id cliente: $nome<br>";
    echo "Idade cliente: $idade<br>";
    echo "Fumante: $fumante</p>";

    if ($idade >= 18  && $fumante == false) {
        echo "<p>Sua idade é: $idade </p>";
        echo "<p>Pode entrar na festa </p>";
    }

    if ($idade >= 18 && $fumante == false) {
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    } else {
        echo "Você não pode entrar";
    }


    if ($nota >= 8) {
        echo "<p>Aprovado</p>";
    } else if ($nota >= 5) {
        echo "<p>Recuperação</p>";
    } else {
        echo "<p>Reprovado</p>";
    }

    $idade = 20;
    if ($idade >= 18) {
        echo "pode entrar";
    } else {
        echo "rejeitado";
    }


    $idade = 20;
    echo ($idade >= 18) ? "pode entrar" : "rejeitado";

    $cor = "vermelho";
    switch ($cor) {
        case 'azul':
            echo "<p>Sua cor favorita é <b> Azuk</b></p>";
            break;
        case 'verde':
            echo "<p>Sua cor favorita é <b> Verde</b></p>";
            break;
        case 'vermelho':
            echo "<p>Sua cor favorita é <b> Vermelho</b></p>";
            break;
        default:
            echo "<p>Sua cor favorita não é verde, nem azul e nem vermelho</p>";
            break;
    }

    $dia = 3;
    switch ($dia) {
        case 1:
            echo "domingo";
            break;
        case 2:
            echo "segunda";
            break;
        case 3:
            echo "terça";
            break;
        case 4:
            echo "quarta";
            break;
        case 5:
            echo "quinta";
            break;
        case 6:
            echo "sexta";
            break;
        case 7:
            echo "sabado";
            break;
        default:
            echo "dia inválido";
            break;
    }

    ?>

    <!--     
        operadores PHP 
    OPERADORES ARITMÉTICOS 
    Adição: (+)
    Subtração: (-)
    Multiplicação: (*)
    Divisão: (/)
    Módulo - resto da divisão: (%)

    OPERADORES RELACIONAIS/COMPARAÇÃO
    (==) Igual a
    (===) Idêntico, e do mesmo tipo de dados
    (!=),(<>) Diferente de
    (!==) Não idêntico
    (<) Menor que
    (>) Maior que
    (<=) Menor ou igual a
    (>=) Maior ou igual a
    (<=>) Define um inteiro(-1,0,1) caso o resultado da comparação for menor que, igual ou maior que, respectivamente

    OPERADORES LÓGICOS
    and / && (e) – O resultado verdadeiro só será obtido quando ambos dos dados comparados forem verdadeiros.

    or / || (ou) – O resultado verdadeiro só será obtido quando pelo menos um dos dados comparados for verdadeiro.

    xor – O resultado verdadeiro só será obtido quando pelo menos um dos dados comparados for verdadeiro, mas não ambos.

    ! / NOT (não) – INVERTE O RESULTADO, Se for verdadeiro e você usar o NOT o resultado mudará para falso, se for falso mudará para verdadeiro.
-->


</body>

</html>