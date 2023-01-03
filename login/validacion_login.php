<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
$usuario = $_POST['usuario'];
$password = $_POST['password'];
session_start();
$_SESSION['usuario'] = $usuario;
$conexion = mysqli_connect("localhost", "root", "", "rrhh");
$consulta = "SELECT*FROM login_tb where usuario = '$usuario' and password ='$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:../index.html");
} else {
?>
    <div class="error_validacion">
        <h1>Error en la autentificacion</h1>
    </div>
    <?php
    include("login.html");
    ?>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
