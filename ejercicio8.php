
<?php
if($_POST){
    $valorA= $_POST['valorA'];
    $valorB= $_POST['valorB'];
    $suma = $valorA + $valorB;
    echo "el resultado es ".$suma;
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
    <form action="ejercicio8.php" method="post">
        <input type="text" name="valorA" id="">
        <br/>
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Sumar">
    </form>
</body>
</html>