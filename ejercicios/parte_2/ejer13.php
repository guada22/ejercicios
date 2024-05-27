<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 13</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Promedio de notas</h2>  
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
 echo '<br/>Notas: '.$_POST['txtC1'].','.$_POST['txtC2'].','.$_POST['txtC3'];
 echo '<br />El promedio obtenido es: '.$obPro->resultado;
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
            if ($num1>0&&$num1<=10&&$num2>0&&$num2<=10&&$num3>0&&$num3<=10){
            $this->resultado = ($num1+$num2+$num3)/3;
            } else if ($num1<0 || $num1>10 || $num2<0 || $num2>10 || $num3<0 || $num3>10){
                echo "Una de las notas es incorrecta, no se puede realizar la operacion";
            }if ($num1==$num2&&$num1==$num3&&$num2==$num3){
            echo "Las tres notas son iguales. ";
        } else {
            if ($num1>=$num2&&$num1>=$num3) {
            echo "La primer nota es la mayor: $num1. ";
            } else if ($num2>=$num1&&$num2>=$num3){
            echo "La segunda nota es la mayor: $num2. ";
        } else if ($num3>=$num1&&$num3>=$num2) {
            echo "La tercer nota es la mayor: $num3. ";
        } 
        if ($num1<=$num2&&$num1<=$num3) {
            echo "La primera nota es la menor: $num1";
        } else if ($num2<=$num1&&$num2<=$num3){
            echo "La segunda nota es la menor: $num2";
        } else if ($num3<=$num1&&$num3<=$num2){
            echo "La tercer nota es la menor: $num3";
        } 
        
        }
        }
    }
?>

