<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
    <form action="calculadora.php" method="get">


</html><label for="op1">operando1</label>
<input type="text" name="op1" id="op1">

</html><label for="op2">operando2</label>
<input type="text" name="op2" id="op2">

</html><label for="op">operando</label>
<input type="text" name="op" id="op">

<!-- <select name="op" id="op">
            <option value="+" <?= //selected('+', $op) ?>>+</option>
            <option value="-" <?= //selected('-', $op) ?>>-</option>
            <option value="*" <?= //selected('*', $op) ?>>*</option>
            <option value="/" <?= //selected('/', $op) ?>>/</option>
        </select> -->

    <select name="op" id="op">
        <?php foreach(OPS as $oper): ?>
            <option value="<?= $oper?>" <?= selected ($oper, $op)?>>
            <?= $oper ?>
            </option>
            <?php endforeach ?>
    </select>

    <button type="submit">Calcular</button>


    </form> 
    <?php

    $errores = [];

    if ( $op1, $op2, $op){
        
    }



    ?>

</body>

</html>