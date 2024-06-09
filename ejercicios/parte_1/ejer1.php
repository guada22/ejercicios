<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
     
</head>
<body>
    <div>
        <h2>Hallar A+B-C+100</h2>
        <form name='form01' method='POST' action=''>
            <label>Numeros:</label>
            <input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> +
            <input type='text' name='txtC2' maxlength='10' style='width:50px;' placeholder="B"/> -
            <input type='text' name='txtC3' maxlength='10' style='width:50px;' placeholder="C"/> +100
 
            <br/>
            <input type='submit' name='btnObtener' value='Obtener' />
        </form>
    </div>
 <?php
 
 if(isset($_POST['btnObtener'])){
 $obPro = new promedio();
 $obPro->calcularPromedio($_POST['txtC1'],$_POST['txtC2'],$_POST['txtC3']);
 echo '<br />El calculo obtenido es: '.$obPro->resultado;
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
            $this->resultado = ($num1+$num2-$num3)+100;
            
        }
    }
?>

