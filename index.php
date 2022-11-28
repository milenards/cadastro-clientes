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
    echo "<p>Id cliente: $nome<br>";
    echo "Idade cliente: $idade<br>";
    echo "Fumante: $fumante</p>";

    if($idade>=18){
        echo"<p>Sua idade é: $idade </p>";
        echo"<p>Pode entrar na festa </p>";
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