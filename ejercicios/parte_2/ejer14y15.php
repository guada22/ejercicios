<!DOCTYPE html>
<html> 
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 14-15</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
   <style>
	h1{
		text-align:center;
	}

	table{
		background-color:#0C9;
		padding:5px;
		border:#444 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>
<body>
    <h2>Lista de numeros 1-100</h2>
    
<?php
define('TAM',10); 
echo "<table border=1>"; 
$n=1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0) 
 echo "<tr bgcolor=#bdc3d6>";
 else
 echo "<tr>"; 
 for ($n2=1; $n2<=TAM; $n2++)
 {
 echo "<td>", $n, "</td>"; 
 $n=$n+1; 
 }
 echo "</tr>"; 
}
echo "</table>"; 

?>
    <style>
	h1{
		text-align:center;
	}

	table{
		background-color:#0C9;
		padding:5px;
		border:#444 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>
<body>
    <h2>Lista de numeros 1-100 Negativos</h2>
    
<?php
 
echo "<table border=1>"; 
$n=-1;
for ($n1=1; $n1<=TAM; $n1++)
{
 if ($n1 % 2 == 0) 
 echo "<tr bgcolor=#bdc3d6>";
 else
 echo "<tr>"; 
 for ($n2=+1; $n2<=TAM; $n2++)
 {
 echo "<td>", $n, "</td>"; 
 $n=$n-1; 
 }
 echo "</tr>"; 
}
echo "</table>"; 
?>
</body>
</html>