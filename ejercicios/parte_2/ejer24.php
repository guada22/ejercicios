<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
 <title>EJERCICIO 21</title>
    <style>
	table {border-collapse: collapse;}
	table thead tr {background-color:#C0C0C0;}
	table thead th {padding:5px;border:2px solid #fff;}
 
	table tbody tr {background-color:#f2f5f7;}
	table tbody tr:hover {background-color:#e3e9ec;}
	table tbody td {border:2px solid #fff;padding:5px;text-align:center;}
 
	table tbody td:last-child, table thead th:last-child {border-right:0px;}
    </style>
</head>
<body>
 <h2>Lista de numeros 1-100 par-impar</h2>
<?php
function listadoNumeros()
{
	echo "<table>
		<thead>
			<tr>
				<th>Numero</th>
				<th>Par</th>
				<th>Impar</th>
				
			</tr>
		</thead>
		<tbody>";
			for($i=1;$i<=100;$i++)
			{
				echo "<tr>";
					echo "<td>".$i."</td>";
 
					if($i%2==0)
					{
						echo "<td>X</td>";
						echo "<td></td>";
					}else{
						echo "<td></td>";
						echo "<td>X</td>";
					}
 
					
				echo "</tr>";
			}
		echo "</tbody>
	</table>";
}
 
listadoNumeros();
?>
 
</body>
</html>