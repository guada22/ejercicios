<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 6</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Numero positivo-negativo-nulo</h2>
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
 echo '<br />Numero: '.$_POST['txtC1'];
 
 
 }
 ?>
 </body>
 </html>
 
 <?php
    class promedio{
        public $num1;
        
        public $resultado;
        
        public function calcularPromedio($num1){
            if($num1>0){
            echo "El numero ingresado es positivo";
            }
             else if ($num1<0) {
              echo "El numero ingresado es negativo";
             } else if ($num1==0) {
             echo "El numero ingresado es nulo";
            
             }
        }
    }
?>
