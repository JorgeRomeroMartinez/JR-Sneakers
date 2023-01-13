<?php
session_start();
$usuario = $_SESSION["nombre_usuario"];
?>

<!-- PEDIDOS -->
<?php
    echo'
        <div class="container ">
            <div class="row mt-5 ">
                <div class="col d-flex justify-content-end">
                    <form action ="index.php" method = "POST">
                        <button class="btn_home" type="submit" name="home" value="home">Volver al HOME</button>
                    </form>
                </div>
            </div>
            <div class="row mt-5 tabla_datos">
                                <div class="col ">
    ';

        $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
            mysqli_set_charset($conexion, "utf8");
                 
                // CONSULTA 
                $consulta = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' ;";
                    if ($resultado = mysqli_query($conexion, $consulta)) {
                        while ($fila = mysqli_fetch_row($resultado)) {
                            echo'
                                <div class="row mt-3">
                                    <div class="col-6">- Nombre: 
                                    </div>
                                    <div class="col-6">'.$fila[0].'
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">- Correo: 
                                    </div>
                                    <div class="col-6">'.$fila[1].'
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6">- Ciudad: 
                                    </div>
                                    <div class="col-6">'.$fila[4].'
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-6">- Calle: 
                                    </div>
                                    <div class="col-6">'.$fila[3].'
                                    </div>
                                </div>
                            ';
                        }
                    mysqli_free_result($resultado);
                   }
    mysqli_close($conexion);

    echo' 
                   
                </div></div></div></div>
            </div>
        </div>
    ';
    
?>
