<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");

$fecha_ingreso_add = $_POST["fecha_ingreso"];
$id = $_POST["empleado"];
$nombre = $_POST["nombre"];
$apellidos = $_POST['apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$edad = $_POST['edad'];
$lugar_nacimiento = $_POST['lugar_nacimiento'];
$cedula = $_POST['cedula'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$nivel_academico = $_POST['nivel_academico'];
$experiencia_laboral = $_POST['experiencia_laboral'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];

$insertar = "INSERT INTO `personal_tb`(`fecha_ingreso`, `id_empleado`, `nombre`, `apellido`, `fecha_nacimiento`, `edad`, `lugar_nacimiento`, `cedula`, `sexo`, `estado_civil`, `nivel_academico`, `experiancia_laboral`, `ciudad`, `provincia`, `correo`, `telefono`) 
VALUES ('$fecha_ingreso_add','$id','$nombre','$apellidos','$fecha_nacimiento','$edad','$lugar_nacimiento','$cedula','$sexo','$estado_civil','$nivel_academico','$experiencia_laboral','$ciudad','$provincia','$correo','$telefono')";

$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "<script> alert('Empleado agregado correctamente'); location.href = '../../rrhh/index.html'</script>";
} else {
    echo "<script> alert('ERROR al ingresar un empleado'); location.href = '../../rrhh/index.html'</script>";
}

