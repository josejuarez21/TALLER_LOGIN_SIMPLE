<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "root", "", "login_sin_capas");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	echo "SE INGRESO CORRECTAMENTEEEE";

}
else{
	echo "Error en la autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);