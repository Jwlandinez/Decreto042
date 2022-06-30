
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Decreto</title>
</head>
<body>

		<div id="Contenedor">
			<header>
				<h1>Consulta Decreto</h1>
			</header>
			<nav></nav>
			<section>
				<article id="contenido">
					<h2>
						<h3>
								
<?php
include('Conexion.php');
$ide=$_POST['identificacion'];

$conexion=mysqli_connect("localhost","root","","decreto");
$consulta="SELECT*FROM t_decreto where IDENTIFICACION='$ide'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

   echo "Usted ha sido favorecido dentro del decreto";

}else{

     echo "Usted  no ha sido favorecido dentro del decreto";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>
 </h3>
<br><br>
<h4> 
<a href="index.php">Volver a consultar</a>   

        </h4>                



					</h2>
				</article>
			</section>
			<footer>
				<h2>
					Coppirid
				</h2>
			</footer>
			

		</div>


</body>
</html>