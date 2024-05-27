<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 16</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Numero y lista hasta dicho numero</h2>
 <form name='form01' method='POST' action=''>
 <label>Numero:</label>
 <input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> 
  
 
 
 <br />
 <input type='submit' name='btnObtener' value='Obtener' />
 </form>
 <?php
 
 if(isset($_POST['btnObtener'])){
     
 $obPro = new promedio();
 $obPro->calcularPromedio($_POST['txtC1']);
 
 
 
 }
 ?>
 </body>
 </html>
 
 <?php
    class promedio{
        public $num1;
        
        public $resultado;
        
        public function calcularPromedio($num1){
            $i=1;
            while($i<=$num1){
            echo "$i,";
            $i++;
             }
        }
    }
?>