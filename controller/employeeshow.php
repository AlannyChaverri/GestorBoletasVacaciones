<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
include("../conexion/conexion.php");
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
    <!--  -->
    <script>
        function confirmar() {
            return confirm("¿Está seguro que quiere eliminar el registro?")
        }
    </script>
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

            <nav>
                <a class="navegacion-enlace" href="../index.html">Volver</a>
            </nav>
        </header>

        <body>
            <div class="container_table">
                <DIV class="table_title">Datos de los empleados</DIV>
                <div class="table_header">ESTADO</div>
                <div class="table_header">INGRESO</div>
                <div class="table_header">ID</div>
                <div class="table_header">NOMBRE</div>
                <div class="table_header">APELLIDOS</div>
                <div class="table_header">NACIMIENTO</div>
                <div class="table_header">EDAD</div>
                <div class="table_header">NACIMIENTO</div>
                <div class="table_header">CEDULA</div>
                <div class="table_header">SEXO</div>
                <div class="table_header">ESTADO</div>
                <div class="table_header">ACADEMICO</div>
                <div class="table_header">EXPERIENCIA</div>
                <div class="table_header">CIUDAD</div>
                <div class="table_header">PROVINCIA</div>
                <div class="table_header">CORREO</div>
                <div class="table_header">TELEFONO</div>
                <div class="table_header">OPERACION</div>
                <?php
                $sql = "SELECT * from personal_tb ORDER BY fecha_ingreso";
                $resultado = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($resultado)) { ?>

                    <div class="table_item"> <?php echo $mostrar['estado'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['fecha_ingreso'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['id_empleado'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['nombre'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['apellido'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['fecha_nacimiento'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['edad'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['lugar_nacimiento'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['cedula'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['sexo'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['estado_civil'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['nivel_academico'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['experiancia_laboral'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['ciudad'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['provincia'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['correo'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['telefono'] ?> </div>
                    <div class="table_item_operacion">
                        <a href="employeeedit.php?id= <?php echo $mostrar['cedula'] ?>" class="table_item_link"> <img class="img_operacion img_operacion_edit"  src="../img/edit.png" alt=""> </a> |
                        <a href="employeedelete.php?id= <?php echo $mostrar['cedula'] ?>" onclick="return confirmar()" class="table_item_link"> <img class=" img_operacion img_operacion_delete" src="../img/delete.png" alt=""></a>
                    </div>
                <?php }
                mysqli_free_result($resultado); ?>
            </div>
    </div>
</body>

</html>