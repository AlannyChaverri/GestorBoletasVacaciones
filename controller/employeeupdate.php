<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
$estado = $_POST["estado_edit"];
$fecha_ingreso_add = $_POST["ingreso_edit"];
$id = $_POST["id_edit"];
$nombre = $_POST["nombre_edit"];
$apellidos = $_POST['apellido_edit'];
$fecha_nacimiento = $_POST['fecha_nacimiento_edit'];
$edad = $_POST['edad_edit'];
$lugar_nacimiento = $_POST['lugar_nacimiento_edit'];
$cedula = $_POST['cedula_edit'];
$sexo = $_POST['sexo_edit'];
$estado_civil = $_POST['estado_civil_edit'];
$nivel_academico = $_POST['nivel_academico_edit'];
$experiencia_laboral = $_POST['experiencia_edit'];
$ciudad = $_POST['ciudad_edit'];
$provincia = $_POST['provincia_edit'];
$correo = $_POST['correo_edit'];
$telefono = $_POST['telefono_edit'];


$actualizar = " UPDATE personal_tb SET estado= '$estado',fecha_ingreso='$fecha_ingreso_add',id_empleado='$id',
nombre='$nombre',apellido ='$apellidos',fecha_nacimiento='$fecha_nacimiento',edad='$edad',lugar_nacimiento='$lugar_nacimiento',
cedula='$cedula',sexo='$sexo',estado_civil ='$estado_civil',nivel_academico='$nivel_academico',
experiancia_laboral='$experiencia_laboral',ciudad='$ciudad',provincia='$provincia',correo='$correo',telefono ='$telefono' WHERE cedula='$cedula' ";
$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "<script> alert('Empleado actualizados correctamente'); location.href = '../../rrhh/controller/employeeshow.php'</script>";
} else {
    echo "<script> alert('ERROR al actualizar los datos'); location.href = '../../rrhh/controller/employeeshow.php'</script>";
}
