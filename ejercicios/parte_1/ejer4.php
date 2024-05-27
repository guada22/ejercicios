<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 4</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h2>Ingresando valores y obteniendo su producto</h2>
    <form name='form01' method='POST' action=''>
        ValorA:
        <input type="text" name="ValorA" id="">
        <br>
        ValorB:
        <input type="text" name="ValorB" id="">
        <br>
        <input type="submit" value="calcular">
    </form>    

<?php
 
 //Producto de dos numeros 

    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];
    $producto=$ValorA*$ValorB;

    echo "<br/>"."El producto es ". $producto;
?>
</body>
</html>



 