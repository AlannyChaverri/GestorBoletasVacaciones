<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
$id = $_GET["id"];

$eliminar = "DELETE from personal_tb WHERE cedula = '$id'";
$resultadoDelete = mysqli_query($conexion, $eliminar);
if ($resultadoDelete) {
    echo "<script> alert('Empleado eliminado correctamente'); location.href = '../../rrhh/controller/employeeshow.php'</script>";
} else {
    echo "<script> alert('ERROR al eliminar el empleado'); location.href = '../../rrhh/controller/employeeshow.php'</script>";
}
