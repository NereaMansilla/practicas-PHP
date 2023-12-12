<?php
if($_POST){
    $valorA= $_POST['valorA'];
    $valorB= $_POST['valorB'];
    $suma = $valorA + $valorB;

 
    if($valorA != $valorB){
        echo "El valor A es distinto del valor B";
    }else{
        echo "El valor A y B son iguales";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio12.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br/>
        Valor B:
        <input type="text" name="valorB" id="">
        <br/>
       
        <input type="submit" value="Sumar">
    </form>
</body>
</html>