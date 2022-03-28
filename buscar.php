<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entregable_4</title>
</head>
<body><br><br>
	<h1>FORMULARIO</h1>
	Ingresar DNI:
		<div>
			<form action="buscar.php" method="post">
			<input type="text" name="buscar"><br><br>
			<input type="submit" value="buscar">
			<a href="nuevo.php">Nuevo</a>
			</form>
		</div>


		<div>
			<table>
				<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				</tr>
				<?php 
					$buscar=$_POST['buscar'];
				$cnx=mysqli_connect("localhost","root","","dbprueba");
				$sql="SELECT id,nom,ape,dni FROM talumno where dni like '$buscar' '%' order by id desc";
			    $rta=mysqli_query($cnx,$sql);	
					while ($mostrar=mysqli_fetch_row($rta)) {
						?>
						<tr>	
								
								<td>	<?php 	echo $mostrar['1'] ?></td>
								<td>	<?php 	echo $mostrar['2'] ?></td>
								
								
						</tr>
						<?php 	


					}

				 ?>
			</table>
		</div>
</body>
</html>