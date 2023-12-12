

  
<?php
if($_POST){
    $valorA= $_POST['valorA'];
    $valorB= $_POST['valorB'];
    $suma = $valorA + $valorB;

   /*  if($valorA == $valorB){
        echo "El valor A es igual al valor B"."<br/>";

        if($valorA == 4){
            echo "El valor es 4";
        }
        if($valorA == 5){
            echo "El valor es 5";
        }
    } */

    if(($valorA == $valorB) && ($valorA == 4)){
        echo "El valor A es igual al valor B y es 4";
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
    <form action="ejercicio11.php" method="post">
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