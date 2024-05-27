<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 11</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>4 Operaciones</h2>
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
 echo 'Numeros: '.$_POST['txtC1'].','.$_POST['txtC2'].','.$_POST['txtC3'];
 echo '<br />El resultado de suma es: '.$obPro->resultado;
 echo '<br />El resultado de resta es: '.$obPro->resultado2;
 echo '<br />El resultado de multiplicacion es: '.$obPro->resultado3;
 echo '<br />El resultado de division es: '.$obPro->resultado4;
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
            $this->resultado = ($num1+$num2+$num3);
            $this->resultado2 = ($num1-$num2-$num3);
            $this->resultado3 = ($num1*$num2*$num3);
            $this->resultado4 = ($num1/$num2/$num3);
        }
    }
?>

