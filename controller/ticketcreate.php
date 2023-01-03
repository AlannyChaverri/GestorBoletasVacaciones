<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
$expediente = $_POST["expediente"];
$fecha = $_POST["fecha"];
$departamento = $_POST['departamento'];
$nombre = $_POST["nombre"];
$cargo = $_POST['cargo'];
$cedula = $_POST['cedula'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$dias = $_POST['dias'];

$insertar = "INSERT INTO boletas_tb (expediente, fecha_solicitud, departamento, funcionario, puesto, cedula, fecha_ingreso, fecha_inicio, fecha_final, dias) 
    VALUES ('$expediente','$fecha','$departamento','$nombre','$cargo','$cedula','$fecha_ingreso','$fecha_inicio','$fecha_fin','$dias')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script> alert('Boleta agregada correctamente'); location.href = '../../rrhh/index.html'</script>";
} else {
    echo "<script> alert('ERROR al crear la boleta'); location.href = '../../rrhh/index.html'</script>";
}
