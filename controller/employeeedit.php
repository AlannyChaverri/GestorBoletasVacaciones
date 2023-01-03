<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
$id = $_GET["id"];
$sql = "SELECT * from personal_tb WHERE cedula = '$id'";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <!-- logo -->
    <link rel="icon" href="../img/logo1.png">

    <title>Empleados | Sistema Municipalidad</title>
</head>

<body>
    <div class="fondo_empleado">
        <!-- Navegacion -->
        <header class="navegacion">
            <a href="../index.html" class="logo">
                <img src="../img/logo1.png" alt="logomunicipalidad">
                <img src="../img/logo2.png" alt="logogobiernocanas">
            </a>

            <nav><a class="navegacion-enlace" href="employeeshow.php">volver</a>
            </nav>
        </header>

        <body id="fondo_empleado">
            <form class="container_table_edit" action="../controller/employeeupdate.php" method="POST">
                <DIV class="table_title_edit">Datos de los empleados</DIV>
                <div class="table_header_edit">ESTADO</div>
                <div class="table_header_edit">INGRESO</div>
                <div class="table_header_edit">ID</div>
                <div class="table_header_edit">NOMBRE</div>
                <div class="table_header_edit">APELLIDOS</div>
                <div class="table_header_edit">NACIMIENTO</div>
                <div class="table_header_edit">EDAD</div>
                <div class="table_header_edit">NACIMIENTO</div>
                <div class="table_header_edit">CEDULA</div>
                <div class="table_header_edit">SEXO</div>
                <div class="table_header_edit">ESTADO</div>
                <div class="table_header_edit">ACADEMICO</div>
                <div class="table_header_edit">EXPERIENCIA</div>
                <div class="table_header_edit">CIUDAD</div>
                <div class="table_header_edit">PROVINCIA</div>
                <div class="table_header_edit">CORREO</div>
                <div class="table_header_edit">TELEFONO</div>
                <div class="table_header_edit">OPERACION</div>
                <?php
                $resultado = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($resultado)) { ?>
                    <input type="text" name="estado_edit" class="table_item_input" value="<?php echo $mostrar['estado'] ?>">
                    <input type="text" name="ingreso_edit" class="table_item_input" value="<?php echo $mostrar['fecha_ingreso'] ?>">
                    <input type="text" name="id_edit" class="table_item_input" value="<?php echo $mostrar['id_empleado'] ?>">
                    <input type="text" name="nombre_edit" class="table_item_input" value="<?php echo $mostrar['nombre'] ?>">
                    <input type="text" name="apellido_edit" class="table_item_input" value="<?php echo $mostrar['apellido'] ?>">
                    <input type="text" name="fecha_nacimiento_edit" class="table_item_input" value="<?php echo $mostrar['fecha_nacimiento'] ?>">
                    <input type="text" name="edad_edit" class="table_item_input" value="<?php echo $mostrar['edad'] ?>">
                    <input type="text" name="lugar_nacimiento_edit" class="table_item_input" value="<?php echo $mostrar['lugar_nacimiento'] ?>">
                    <input type="text" name="cedula_edit" class="table_item_input" value="<?php echo $mostrar['cedula'] ?>">
                    <input type="text" name="sexo_edit" class="table_item_input" value="<?php echo $mostrar['sexo'] ?>">
                    <input type="text" name="estado_civil_edit" class="table_item_input" value="<?php echo $mostrar['estado_civil'] ?>">
                    <input type="text" name="nivel_academico_edit" class="table_item_input" value="<?php echo $mostrar['nivel_academico'] ?>">
                    <input type="text" name="experiencia_edit" class="table_item_input" value="<?php echo $mostrar['experiancia_laboral'] ?>">
                    <input type="text" name="ciudad_edit" class="table_item_input" value="<?php echo $mostrar['ciudad'] ?>">
                    <input type="text" name="provincia_edit" class="table_item_input" value="<?php echo $mostrar['provincia'] ?>">
                    <input type="text" name="correo_edit" class="table_item_input" value=" <?php echo $mostrar['correo'] ?>">
                    <input type="text" name="telefono_edit" class="table_item_input" value=" <?php echo $mostrar['telefono'] ?>">
                <?php }
                mysqli_free_result($resultado); ?>
                <input type="submit" value="Actualizar" class="table_item_input table_item_input_submit">
            </form>
    </div>


</body>

</html>