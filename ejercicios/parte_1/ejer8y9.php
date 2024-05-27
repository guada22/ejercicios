<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 8-9</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Numero mayor y menor</h2>
 <form name='form01' method='POST' action=''>
 <label>Numeros:</label>
 <input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> 
 <input type='text' name='txtC2' maxlength='10' style='width:50px;' placeholder="B"/> 
 
 
 <br />
 <input type='submit' name='btnObtener' value='Obtener' />
 </form>
 <?php
 
 if(isset($_POST['btnObtener'])){
 $obPro = new promedio();
 $obPro->calcularPromedio($_POST['txtC1'],$_POST['txtC2']);
 echo '<br/>Numeros: '.$_POST['txtC1'].','.$_POST['txtC2'];
 
 }
 ?>
 </body>
 </html>
 
 <?php
    class promedio{
        public $num1;
        public $num2;
        
     
        public $resultado;
        
        public function calcularPromedio($num1,$num2){
            if($num1>$num2){
                echo "El primer numero es mayor al segundo";
            } else if ($num1<$num2){
                echo "El segundo numero es mayor al primero";
            } else if ($num1==$num2){
                echo "Los dos numeros son iguales";
            }
            
        }
    }
?>