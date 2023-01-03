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
    <title>Boletas | Sistema Municipalidad</title>
</head>

<body>
    <div class="fondo_boleta">
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
            <div class="container_table_boleta">
                <DIV class="table_title_boleta">GESTION BOLETAS DE VACACIONES</DIV>
                <div class="table_header">CODIGO</div>
                <div class="table_header">EXPEDIENTE</div>
                <div class="table_header">SOLICITUD</div>
                <div class="table_header">DEPARTAMENTO</div>
                <div class="table_header">FUNCIONARIO</div>
                <div class="table_header">PUESTO</div>
                <div class="table_header">CEDULA</div>
                <div class="table_header">INGRESO</div>
                <div class="table_header">INICIO</div>
                <div class="table_header">FINAL</div>
                <div class="table_header">DIAS</div>
                <div class="table_header">OPERACION</div>
                <?php
                $sql = "SELECT * from boletas_tb ORDER BY fecha_solicitud DESC ";
                $resultado = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_array($resultado)) { ?>

                    <div class="table_item"> <?php echo $mostrar['codigo'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['expediente'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['fecha_solicitud'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['departamento'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['funcionario'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['puesto'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['cedula'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['fecha_ingreso'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['fecha_inicio'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['fecha_final'] ?> </div>
                    <div class="table_item"> <?php echo $mostrar['dias'] ?> </div>
                    <div class="table_item_operacion">
                        |<a href="ticketdelete.php?id= <?php echo $mostrar['codigo'] ?>" onclick="return confirmar()" class="table_item_link"><img class=" img_operacion img_operacion_delete" src="../img/delete.png" alt=""></a>|
                    </div>
                <?php }
                mysqli_free_result($resultado); ?>
            </div>
            <script src="confirmdelete.js"></script>
    </div>
</body>

</html>