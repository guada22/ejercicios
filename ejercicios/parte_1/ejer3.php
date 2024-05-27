<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio3</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h2>Numero positivo y su opuesto</h2>
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
 echo '<br />Su opuesto es: '.$obPro->resultado;
 
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
            $this->resultado = ($num1*(-1));
            }
             else if ($num1<=0) {
              echo "El numero ingresado no es positivo";
              
             
             }
        }
    }
?>
