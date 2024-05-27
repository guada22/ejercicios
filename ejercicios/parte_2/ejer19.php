<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 19</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
    </head>
    <body>
<h2>Promedio de 20 numeros</h2>  
 <form name='form01' method='POST' action=''>
 <label>Numeros:</label>
 <input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> 
 <input type='text' name='txtC2' maxlength='10' style='width:50px;' placeholder="B"/> 
 <input type='text' name='txtC3' maxlength='10' style='width:50px;' placeholder="C"/> 
 <input type='text' name='txtC4' maxlength='10' style='width:50px;' placeholder="D"/> 
 <input type='text' name='txtC5' maxlength='10' style='width:50px;' placeholder="E"/> 
 <input type='text' name='txtC6' maxlength='10' style='width:50px;' placeholder="F"/> 
 <input type='text' name='txtC7' maxlength='10' style='width:50px;' placeholder="G"/> 
 <input type='text' name='txtC8' maxlength='10' style='width:50px;' placeholder="H"/> 
 <input type='text' name='txtC9' maxlength='10' style='width:50px;' placeholder="I"/> 
 <input type='text' name='txtC10' maxlength='10' style='width:50px;' placeholder="J"/> 
 <input type='text' name='txtC11' maxlength='10' style='width:50px;' placeholder="K"/> 
 <input type='text' name='txtC12' maxlength='10' style='width:50px;' placeholder="L"/> 
 <input type='text' name='txtC13' maxlength='10' style='width:50px;' placeholder="M"/> 
 <input type='text' name='txtC14' maxlength='10' style='width:50px;' placeholder="N"/> 
 <input type='text' name='txtC15' maxlength='10' style='width:50px;' placeholder="O"/> 
 <input type='text' name='txtC16' maxlength='10' style='width:50px;' placeholder="P"/> 
 <input type='text' name='txtC17' maxlength='10' style='width:50px;' placeholder="Q"/> 
 <input type='text' name='txtC18' maxlength='10' style='width:50px;' placeholder="R"/> 
 <input type='text' name='txtC19' maxlength='10' style='width:50px;' placeholder="S"/> 
 <input type='text' name='txtC20' maxlength='10' style='width:50px;' placeholder="T"/> 
 <br />
 <input type='submit' name='btnObtener' value='Obtener' />
 </form>
 <?php
 
 if(isset($_POST['btnObtener'])){
 $obPro = new promedio();
 $obPro->calcularPromedio($_POST['txtC1'],$_POST['txtC2'],$_POST['txtC3'],$_POST['txtC4'],$_POST['txtC5'],$_POST['txtC6'],$_POST['txtC7'],$_POST['txtC8'],$_POST['txtC9'],$_POST['txtC10'],$_POST['txtC11'],$_POST['txtC12'],$_POST['txtC13'],$_POST['txtC14'],$_POST['txtC15'],$_POST['txtC16'],$_POST['txtC17'],$_POST['txtC18'],$_POST['txtC19'],$_POST['txtC20']);
 echo '<br/>Numeros: '.$_POST['txtC1'].','.$_POST['txtC2'].','.$_POST['txtC3'].','.$_POST['txtC4'].','.$_POST['txtC5'].','.$_POST['txtC6'].','.$_POST['txtC7'].','.$_POST['txtC8'].','.$_POST['txtC9'].','.$_POST['txtC10'].','.$_POST['txtC11'].','.$_POST['txtC12'].','.$_POST['txtC13'].','.$_POST['txtC14'].','.$_POST['txtC15'].','.$_POST['txtC16'].','.$_POST['txtC17'].','.$_POST['txtC18'].','.$_POST['txtC19'].','.$_POST['txtC20'];
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
        public $num4;
        public $num5;
        public $num6;
        public $num7;
        public $num8;
        public $num9;
        public $num10;
        public $num11;
        public $num12;
        public $num13;
        public $num14;
        public $num15;
        public $num16;
        public $num17;
        public $num18;
        public $num19;
        public $num20;
        public $resultado;

        public function calcularPromedio($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12,$num13,$num14,$num15,$num16,$num17,$num18,$num19,$num20){
            
            $this->resultado = ($num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9+$num10+$num11+$num12+$num13+$num14+$num15+$num16+$num17+$num18+$num19+$num20)/20;
        }
    }
?>