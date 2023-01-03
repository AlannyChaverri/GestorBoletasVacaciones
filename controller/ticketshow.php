<!-- logo -->
<link rel="icon" href="../img/logo1.png">
<?php
$inc = include("conexion/conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM boletas_tb ORDER BY fecha_solicitud DESC LIMIT 1";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $expediente = $row["expediente"];
            $fecha = $row["fecha_solicitud"];
            $departamento = $row['departamento'];
            $nombre = $row["funcionario"];
            $cargo = $row['puesto'];
            $cedula = $row['cedula'];
            $fecha_ingreso = $row['fecha_ingreso'];
            $fecha_inicio = $row['fecha_inicio'];
            $fecha_fin = $row['fecha_final'];
            $dias = $row['dias'];
?>
            <br>
            <div class="contenedor_boleta">
                <div class="contenedor_datos">
                    <div class="datos_personales">
                        <div>
                            <b>FECHA DE LA SOLICITUD: </b> <?php echo $fecha ?><br>
                        </div>
                    </div>
                    <h1>DATOS PERSONALES DEL SOLICITANTE</h1>
                    <div class="datos_personales">
                        <div class="datos_personales_dentro">
                            <b>DEPARTAMENTO: </b> <?php echo $departamento ?><br>
                            <b>FUNCIONARIO: </b> <?php echo $nombre ?><br>
                            <b>PUESTO: </b> <?php echo $cargo ?><br>
                        </div>
                        <div class="datos_personales_dentro">
                            <b>EXPEDIENTE: </b> <?php echo $expediente ?><br>
                            <b>CEDULA: </b> <?php echo $cedula ?><br>
                            <b>FECHA INGRESO: </b> <?php echo $fecha_ingreso ?><br>
                        </div>
                    </div>
                    <h1>DATOS SOBRE LAS VACACIONES SOLICITADAS</h1>
                    <div class="datos_personales">
                        <div class="datos_personales_dentro">
                            <b>FECHA INICIO: </b> <?php echo $fecha_inicio ?><br>
                            <b>FECHA FIN: </b> <?php echo $fecha_fin ?><br>
                            <b>DIAS SOLICITADOS: </b> <?php echo $dias ?><br>
                        </div>
                    </div>
                    <div class="datos_personales">
                        <div>
                            <b>EN FORMA: </b>
                        </div>
                        <div>
                            <b>COMPLETA </b>
                            <input type="checkbox" name="completa">
                        </div>
                        <div>
                            <b>FRACCIONADA </b>
                            <input type="checkbox" name="fraccionada">
                        </div>
                    </div>
                    <div class="firmas">
                        <div>
                            <input type="text" name="firma_funcionario">
                            <b>FIRMA DEL FUNCIONARIO</b>
                        </div>
                        <div>
                            <input type="text" name="firma_funcionario">
                            <b>FIRMA DE VICEALCALDIA </b>
                        </div>
                        <div>
                            <input type="text" name="firma_funcionario">
                            <b>AUTORIZACION DEL JEFE INMEDIATO</b>
                        </div>
                    </div>
                    <h1>USO EXCLUSIVO PARA EL DEPARTAMIENTO DE RECURSOS HUMANOS</h1>
                    <br>
                    <div class="uso_exclusivo">
                        <div>
                            <div class="uso_exclusivo_revisado">
                                <label for="Firma-Funcionario">Revisador Por: </label>
                                <input type="text" name="firma-funcionario">
                            </div>
                        </div>
                        <div>
                            <div class="uso_exclusivo_abajo_fechas">
                                <div class="text_justify">
                                    <label for="Firma-Funcionario">Se le autorizan las vacaciones a partir del <input type="text" name="firma-funcionario"> debera de ingresar a laborar el dia <input type="text" name="firma-funcionario"> </label>
                                </div>
                            </div>
                            <div class="uso_exclusivo_abajo">
                                <div class="text_justify">
                                    <label for="Firma-Funcionario">Le quedan pendientes </label>
                                    <input type="text" name="firma-funcionario" id="firma-funcionario">
                                    <label for="Firma-Funcionario">del periodo</label>
                                    <input type="text" name="firma-funcionario" id="firma-funcionario">
                                </div>
                            </div>
                            <div class="uso_exclusivo_abajo fima_tramitada">
                                <div class="text_justify">
                                    <label for="Firma-Funcionario">Tramitada por: </label>
                                    <input type="text" name="firma-funcionario" id="firma-funcionario">
                                </div>
                                <div class="uso_exclusivo_abajo_">
                                    <label for="Firma-Funcionario">Fecha:</label>
                                    <input type="text" name="firma-funcionario" id="firma-funcionario">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div><br>
            </div>
<?php
        }
    }
}
