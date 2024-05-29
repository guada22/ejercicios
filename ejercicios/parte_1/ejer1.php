<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
     <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="index.html">
</head>
<body>
<nav class="navbar">
        <!--Logo -->
        <div class="nav-left">
            <div class="logo">
                <img src="img/logo.jpg" width="85px" height="75px">
            </div>
            <h3>I.S.C.M.LL.</h3>
        </div>
    <div class="right">
            <input type="checkbox" id="check">
            <label for="check" class="checkBtn">
                <i class="fa fa-bars"></i>
            </label>
<!--Menu de navegacion-->
        <div class="nav-right">
            <ul class="list">
                <li><a href="#">Inicio</a></li>
                <li><a href="Galeria.html">Galeria</a></li>
                <li class="trabajos">
                    <a href="ejercicios.html">Trabajos</a>
                    <ul class="toggle">
                        <li class="ejer1_al_9">Ejercicio del 1 a 9 <a href="ejercicios/parte_1/"></a>
                        </li>
                        <li class="ejer10_al_19">Ejercicio del 10 al 19 <a href="ejercicios/parte_2/"></a>
                        </li>
                    </ul>
                </li>
                <li><a href="sobre mi.html">Sobre mi</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </div>
    </nav>

    <h2>Hallar A+B-C+100</h2>
    <form name='form01' method='POST' action=''>
        <label>Numeros:</label>
        <input type='text' name='txtC1' maxlength='10' style='width:50px;' placeholder="A" /> +
        <input type='text' name='txtC2' maxlength='10' style='width:50px;' placeholder="B"/> -
        <input type='text' name='txtC3' maxlength='10' style='width:50px;' placeholder="C"/> +100
 
        <br />
        <input type='submit' name='btnObtener' value='Obtener' />
    </form>
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

