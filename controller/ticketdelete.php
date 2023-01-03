<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
$id = $_GET["id"];

$eliminar = "DELETE from boletas_tb WHERE codigo = '$id'";
$resultadoDelete = mysqli_query($conexion, $eliminar);
if ($resultadoDelete) {
    echo "<script> alert('Empleado eliminado correctamente'); location.href = '../controller/ticketshowgestor.php'</script>";
} else {
    echo "<script> alert('ERROR al eliminar el empleado'); location.href = '../controller/ticketshowgestor.php'</script>";
}
