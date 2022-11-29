<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1>Repetição</h1>
    <?php
    // $contador = 1;
    // while($contador < 10){
    //     echo"contador while, loop número $contador <br> ";
    //     $contador ++ ; //$contador = $contador +1;
    // }

    //array
    $clientes = ["Guto", "Cleyton", "Renata", "Pedro", "andrea", "joana"];
    $contador = 0;
    while($contador <= 5 ){
        echo "$clientes[$contador]<br>";
        $contador = $contador + 1;
    }
    
    ?>
    
</body>
</html>