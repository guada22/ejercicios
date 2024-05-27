<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ejercicio2</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<h2>Obtener (a-b) * (a+b)</h2>
 	<form name='form01' method='POST' action=''>
 		<label>Numeros:</label>
 		<input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> 
 		<input type='text' name='txtC2' maxlength='10' style='width:50px;' placeholder="B"/> 
 		<br>
 		<input type='submit' name='btnObtener' value='Obtener' />
 	</form>
<?php
 
 if(isset($_POST['btnObtener'])){
 $obPro = new promedio();
 $obPro->calcularPromedio($_POST['txtC1'],$_POST['txtC2']);
 echo '<br />El calculo obtenido es: '.$obPro->resultado;
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
            $this->resultado = ($num1-$num2) * ($num1+$num2);
            
        }
    }
?>