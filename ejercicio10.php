

  
<?php
if($_POST){
    $valorA= $_POST['valorA'];
    $valorB= $_POST['valorB'];
    $suma = $valorA + $valorB;

    if(  ($valorA != $valorB)  &&   ($valorA > $valorB)  ){
        echo "El valor A y B son distintos, y el valor A es mayor que B"
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
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br/>
        <input type="text" name="valorB" id="">
        <br/>
        Valor B:
        <input type="submit" value="Sumar">
    </form>
</body>
</html>