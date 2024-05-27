<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 7</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Triangulos</h2>
 <form name='form01' method='POST' action=''>
 <label>Numeros:</label>
 <input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> 
 <input type='text' name='txtC2' maxlength='10' style='width:50px;' placeholder="B"/> 
 <input type='text' name='txtC3' maxlength='10' style='width:50px;' placeholder="C"/> 
 
 <br />
 <input type='submit' name='btnObtener' value='Obtener' />
 </form>
 <?php
 
 if(isset($_POST['btnObtener'])){
 $obPro = new promedio();
 $obPro->calcularPromedio($_POST['txtC1'],$_POST['txtC2'],$_POST['txtC3']);
 echo '<br/>Numeros: '.$_POST['txtC1'].','.$_POST['txtC2'].','.$_POST['txtC3'];
 
 }
 ?>
 </body>
 </html>
 
 <?php
    class promedio{
        public $num1;
        public $num2;
        public $num3;
     
        public $resultado;
        
        public function calcularPromedio($num1,$num2,$num3){
            if ($num1==$num2&&$num1==$num3){
            echo "Los numeros ingresados forman triangulo equilatero ";
            } else if ($num1!=$num2&&$num1==$num3||$num1==$num2&&$num1!=$num3||$num1!=$num2&&$num2==$num3){
           echo "Los numeros ingresados forman un triangulo isosceles";
        } else if ($num1!=$num2&&$num1!=$num3&&$num2!=$num3){
            echo "Los numeros ingresados forman un triangulo escaleno";
        }  
    }
    }
?>