<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 17</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Dos numeros (1° menor que 2°) y lista de enteros</h2>
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
            
            while($num1<$num2){
            echo "$num1,";
            $num1++; }
            echo "$num2";
        if ($num1>$num2){
            echo "Los numeros fueron ingresados de forma incorrecta";
            
        }   
            
        }
        
        }
            
    
    
?>