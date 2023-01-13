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
    ';
                if(isset($_POST['home'])){
                    echo '<script>window.location.replace("index.php");</script>';
                }
    echo'
            <div class="row">
                <div class="col  d-flex justify-content-center pedidos_titulo ">
                    Pedidos
                </div>
            </div>
            <div class="row">
                <div class="col mb-5">
                    ';
    


                    $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                    mysqli_set_charset($conexion, "utf8");
                    // CONSULTA PARA COGER LAS FECHAS NO REPETIDAS DE X USUARIO
                   $consulta1 = "SELECT DISTINCT (fecha) FROM compras_general  WHERE usuario = '".$usuario."' ORDER BY fecha;";
                   if ($resultado1 = mysqli_query($conexion, $consulta1)) {
                    $num_pedidos = 1;
                       while ($fila = mysqli_fetch_row($resultado1)) {
                        
                            echo'
                            <div class="row mt-4">
                                <div class="col mt-5">
                                <h4>- Pedido '.$num_pedidos.':</h4>
                                </div>
                            </div>
                            <div class="row tabla_pedidos m-3">
                                <div class="col">
                            ';
                            $num_pedidos =  $num_pedidos + 1;

                            // CONSULTA PARA SACAR UNA FECHA INDICADA 
                            $consulta = "SELECT * from compras_general WHERE fecha = '".$fila[0]."' AND usuario = '".$usuario."' ;";
                            if ($resultado = mysqli_query($conexion, $consulta)) {
                                $precio_total = 0;
                                while ($fila = mysqli_fetch_row($resultado)) {
                                        
                                        echo '
                                        <div class="row mt-2">
                                            <div class="col">
                                                - '.$fila[2].'
                                            </div>
                                            <div class="col">
                                                '.$fila[7].'
                                            </div>
                                            <div class="col">
                                                Talla: '.$fila[3].'
                                            </div>
                                            <div class="col">
                                                Color: '.$fila[4].'
                                            </div>
                                            <div class="col">
                                                '.$fila[6].' €
                                            </div>
                                        </div>
                                        
                                        ';
                                        $precio_total = $fila[6] + $precio_total;
                                }
                                mysqli_free_result($resultado);
                            }
                            echo'
                                    <div class="row precio_total_pedidos">
                                        <div class="col-lg 10 col-md-10 col-6 d-flex justify-content-end">
                                            Total: 
                                        </div>
                                        <div class="col-lg 10 col-md-10 col-4 precio_total_pedidos1">
                                            '.$precio_total.' € 
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            
                       }
                       mysqli_free_result($resultado1);
                   }
             mysqli_close($conexion);

    echo' 
                   
                </div>
            </div>
        </div>
    ';
    
?>
