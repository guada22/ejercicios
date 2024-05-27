<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 10</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Llamada telefonica</h2>
 <form name='form01' method='POST' action=''>
 <label>Numero:</label>
 <input type='text' name='txtC1' maxlength='10' style='width:200px;' placeholder="Ingrese los minutos de la llamada" /> 
  
 
 
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
            if ($num1>0 && $num1<=3 ) {
              $num2 = ($num1 * 9.50 );
              
              echo "Se le cobra $9.50 por minuto. Los minutos que duro su llamada fueron: $num1. Por tanto se le cobrara: $$num2";
              
             } else if ($num1>3) {
                 $num3 = ($num1 * 1.10 );
                 echo "Su llamada superó los 3 minutos, se le cobra $1.10 por minuto. Por tanto le cuesta: $$num3";
                 
             }
        }
    }
?>

