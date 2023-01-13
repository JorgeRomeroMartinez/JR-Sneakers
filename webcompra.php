<?php
session_start();
$nombre_usuario =   $_SESSION["nombre_usuario"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR-Sneakers</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/body.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/header.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/footer.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/carrito.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/modal_perfil.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/modal_filtro.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/perfil.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/index3.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/login.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/modal_error_login.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/card.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/pedidos.css?" <?php echo time() ;?> >
    <link rel="stylesheet" href="css/alertas_consultas.css?" <?php echo time() ;?> >

</head>
<body class="d-flex flex-column min-vh-100">
<!-- MODAL ALERTA ELIMINAR_ZAPATILLAS_CARRITO -->
<div class="row">
    <div class="col modal_zapatilla_eliminada">
        <div class="row">
            <div class="col elmodal_zapatilla_eliminada">
                <div class="row">
                    <div class="col jus">
                        <p class="zapa_eliminada">Zapatilla eliminada correctamente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
 <!-- MODAL COMENTARIO_CORRECTO -->
 <div class="row">
    <div class="col modal_comentario_succes">
        <div class="row">
            <div class="col elmodal_comentario_succes">
                <div class="row">
                    <p class="col comentario_success">Comentario añadido con exito</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DEL CARRITO -->
<div class="row">
        <div class="col modal_carrito">
          <div class="row">
            <div class="col elmodal_carrito">
              <div class="row">
                <div class="col modal_close_carrito">
                  <i class="bi bi-x-circle close_carrito"></i>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="titulo_carrito">Tu carrito</div>
                </div>
              </div>

              <?php
              $nombre_del_usuario = $_SESSION['nombre_usuario'];
                $conexion11 = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                mysqli_set_charset($conexion11, "utf8");
                $consulta = 'SELECT * FROM carrito WHERE usuario = "'.$nombre_del_usuario.'";'; 
               
                if ($resultado1 = mysqli_query($conexion11, $consulta)) {
                    $precio_total = 0;
                        while ($filas = mysqli_fetch_row($resultado1)) {                
                            $preciodelproducto = $filas[6];        
                            echo '
                                <div class="row carrito_producto"> 
                                    <div class="col-5">
                                    <img class="img_zapatilla_carrito" src="img/'.$filas[5].'/'.$filas[5].'1.png" />
                                    </div>
                                    <div class="col-6">
                                        <div class="row ">
                                            <div class="col- nombre_zapatilla_carrito">
                                                '.$filas[2].'
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col precio_zapatilla_carrito">
                                            '.$filas[6].'€
                                            </div>
                                        </div>       
                                    </div>
                                    <div class="col-1 ">
                                        <form action ="index.php" method = "POST">
                                            <button class="eliminar_zapatilla_carrito1" type="submit" name="button_eliminar_carrito" value="'.$filas[0].'"><i class="bi bi-trash "></i></button>
                                        </form>
                                    </div>
                                </div>
                            ';
                            $precio_total = $preciodelproducto + $precio_total;
                        };
                        if(isset($_POST['button_eliminar_carrito'])){
                            $id_eliminado = $_POST['button_eliminar_carrito'];

                            $conexion_eliminar_carrito = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                            $consulta_eliminar_carrito = 'DELETE FROM carrito  WHERE id = '.$id_eliminado.'';
                          
                                if (mysqli_query($conexion_eliminar_carrito, $consulta_eliminar_carrito)) {

                                    echo '
                                        <script>
                                            function zapatilla_eliminada_css_up(){
                                            const modal_zapatilla_eliminada = document.querySelectorAll(
                                                ".modal_zapatilla_eliminada"
                                            )[0];
                                            modal_zapatilla_eliminada.style.opacity = "1";
                                            modal_zapatilla_eliminada.style.visibility = "visible";
                                            zapatilla_eliminada();
                                            }
                                            function zapatilla_eliminada() {
                                            let timeout = setTimeout(zapatilla_eliminada_css, 1500);
                                            }

                                            function zapatilla_eliminada_css() {
                                            const modal_zapatilla_eliminada = document.querySelectorAll(
                                                ".modal_zapatilla_eliminada"
                                            )[0];
                                            modal_zapatilla_eliminada.style.opacity = "0";
                                            modal_zapatilla_eliminada.style.visibility = "hidden";
                                            window.location.replace("index.php");
                                            }
                                            zapatilla_eliminada_css_up()
                                     </script>
                                    ';
                                    
                                } else {
                                    echo "Error: " . $consulta_eliminar_carrito. "<br>" . mysqli_error($conexion_eliminar_carrito);
                                }
                        }
                        mysqli_free_result($resultado1);
                    }

                mysqli_close($conexion11);
              ?>
            <div class="row margen d-flex align-items-end justify-content-start">
                <div class="col-6">
                    <p class="titulo_precio_carrito" >Precio Total: </p>
                </div>
                <div class="col-4">
                    <p class="precio_total_carrito"><?php  echo $precio_total ?> €</p>
                </div>
            </div>
            <div class="row ">
                <div class="col ">
                    <?php
                    echo'
                        <form action ="index.php" method = "POST">
                            <button class="btn_carrito_comprar" type="submit" name="btn_carrito_comprar" value="comprar">Comprar</button>
                        </form>
                    ';
                    
                        if(isset($_POST['btn_carrito_comprar'])){
                            $nombre = $_SESSION["nombre_usuario"];
                            // CONSULTA PARA EXTRAER LOS DATOS DE LA BD $USUARIO
                            $conexion_eliminar_carrito = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                            mysqli_set_charset($conexion_eliminar_carrito, "utf8");
                            $consulta_eliminar_carrito = 'SELECT * FROM carrito WHERE usuario = "'.$nombre.'" ';
                            if ($resultado2 = mysqli_query($conexion_eliminar_carrito, $consulta_eliminar_carrito)) {
                                    while ($fila1 = mysqli_fetch_row($resultado2)) {   
                                        $nombre_zapatillas = $fila1[2];
                                        $talla = $fila1[3];
                                        $color = $fila1[4];
                                        $img = $fila1[5];
                                        $precio = $fila1[6];
                                        $fecha = date('Y/m/d');
                                        // CONSULTA PARA INSERTAR DATOS EN LA BD compras_general    
                                        $consultaBD = "INSERT INTO compras_general ( usuario, nombre_zapatillas, talla, color, img, precio, fecha) VALUES ( '".$nombre."', '". $nombre_zapatillas."',  '".$talla."', '".$color."', '".$img."', '".$precio."', '".$fecha."');";
                                        if (mysqli_query( $conexion_eliminar_carrito,  $consultaBD)) {
                                        } else {
                                            echo "Error: " .  $consultaBD. "<br>" . mysqli_error( $conexion_eliminar_carrito);
                                        }
                                    }
                            } 
                            //CONSULTA ELIMINAR LA BD DEL CARRITO
                            $consulta_eliminar = 'DELETE FROM carrito WHERE usuario = "'.$nombre.'";';
                            if (mysqli_query( $conexion_eliminar_carrito,  $consulta_eliminar)) {

                                echo '<script>window.location.replace("index.php");</script>';
                            }
                            mysqli_close($conexion_eliminar_carrito);
                        }
                    ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>

<!-- MODAL PERFIL -->
<div class="row">
        <div class="col modal_perfil">
          <div class="row">
            <div class="col elmodal_perfil">
              <div class="row">
                <div class="col modal_close_perfil">
                  <i class="bi bi-x-circle close_perfil"></i>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="titulo_perfil">Tu perfil</div>
                </div>
              </div>
            <div class="row ">
              <div class="col ">
                <button class="btn_perfil_datos" onclick=" perfil()">Datos personales</button>
              </div>
            </div>
            <div class="row ">
              <div class="col ">
                <button class="btn_perfil_pedidos" onclick="pedidos()">Pedidos</button>
              </div>
              
            </div>
            <div class="row ">
              <div class="col ">
                <form action ="index.php" method = "POST">
                    <button class="btn_perfil_cerrar_sesion" type="submit" name="btn_cerrar_sesion" value="btn_cerrar_sesion">Cerrar Sesion</button>
                </form>
              </div>
              <!-- CERRAR SESION ELIMINANDO LA SESION Y LOS DATOS  -->
              <?php
              if(isset($_POST['btn_cerrar_sesion'])){
                unset($_SESSION['nombre_usuario']);
                unset($_REQUEST['usuario']);
                unset($_REQUEST['contraseña']);
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>




<div class="container-fluid">
    <div class="row p-0 header">
        <div class="col-lg-8 col-md-4 col- 12 text-center titulo ">
            JR-Sneakers
        </div>
        <div class="col-lg-4 col-md-8 col-12">
            <?php
            if(!isset( $_SESSION["nombre_usuario"])){
                echo '  
                    <div class="row">
                        <div class="col-6"><button class="btn-header" id="open2">Iniciar Sesion</button></div>
                        <div class="col-6"><button class="btn-header" id="open1"> Registrarse</button></div>    
                    </div>
                ';
            }else{
                echo'
                    <div class="row">
                        <div class="col-lg-4 col-md-2 col-12 d-flex justify-content-start align-items-center"><h3>'.$_SESSION["nombre_usuario"].'</h3></div>
                        <div class="col-lg-4 col-md-5 col-6 d-flex justify-content-center align-items-center"><button class="button_perfil" id=""><i class="bi bi-person-lines-fill img_carrito"></i></button></div>
                        <div class="col-lg-4 col-md-5 col-6 d-flex justify-content-center align-items-center"><button class="button_carrito"  onclick="modalCarritoCompra()" id="open_carrito"><i class="bi bi-bag img_carrito"></i></button></div>
                    </div>
                ';
            }
            ?>
        </div>
    </div>
    
    </div>
    </div>
            <?php
          if(empty ($_POST['succes'])){
            $zapatillas = $_REQUEST['zapatillas'];  
            $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
            $consulta = "select * from zapatillas where nombre_zapatilla = '".$zapatillas."' ;";
            if ($resultado = mysqli_query($conexion, $consulta)) {
                 while ($fila = mysqli_fetch_row($resultado)) {
                  $nombre = $fila[0];
                  $precio = $fila[3];
                  $id = $fila[0];
                  $marca = $fila[2];
                  $carpeta = $fila[4];
                 }
                 mysqli_free_result($resultado);
            }
            mysqli_close($conexion);
            echo '
                <div class="row mt-5  mb-5 m-0 p-0">
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
            <div class="row  m-0 p-0 pt-1 compra_top">   
                <div class="col-lg-7 col-md-12">
                    <div class="carousel slide carousel-fade" id="mi-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img class="mx-auto d-block img-fluid img_zapatillas_compra" src="img/'.$carpeta .'/'.$carpeta .'5.png" alt="">
                            </div>
                            <div class="carousel-item " >
                                <img class="mx-auto d-block img-fluid img_zapatillas_compra" src="img/'.$carpeta .'/'.$carpeta .'2.png" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img class="mx-auto d-block img-fluid img_zapatillas_compra" src="img/'.$carpeta .'/'.$carpeta .'3.png" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img class="mx-auto d-block img-fluid img_zapatillas_compra" src="img/'.$carpeta .'/'.$carpeta .'4.png" alt="">
                            </div>
                        </div>
                            <button class="carousel-control-prev " type="button" data-bs-target="#mi-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next " type="button" data-bs-target="#mi-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        <div class="carousel-indicators ">
                            <button 
                                type="button"
                                class="active"
                                data-bs-target="#mi-carousel"
                                data-bs-slide-to="0"
                                aria-label="Slide 1"
                            ></button>
                            <button 
                                type="button"
                                class=""
                                data-bs-target="#mi-carousel"
                                data-bs-slide-to="1"
                                aria-label="Slide 2"
                            ></button>
                            <button 
                                type="button"
                                class=""
                                data-bs-target="#mi-carousel"
                                data-bs-slide-to="2"
                                aria-label="Slide 3"
                            ></button>
                            <button 
                                type="button"
                                class=""
                                data-bs-target="#mi-carousel"
                                data-bs-slide-to="3"
                                aria-label="Slide 4"
                            ></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="row">
                        <form action="webcompra.php" method="post">
                            <div class="col-12 d-flex justify-content-around">
                                <h1 class="nombre_zapatillas">'. $nombre. ' </h1>
                            </div>
                    </div>
                <div class="row px-5 pt-5 d-flex justify-content-around">
                    <div class="col-6 font_select">
                        <p class="opciones_compra">Talla: </p>
                    </div>
                    <div class="col-6 font_select" >
                            <form action="webcompra.php" method="post">
                                <select class="select_talla" name="talla"> 
                                    <option class="option_talla" value="38">38</option>
                                    <option class="option_talla" value="39">39</option>
                                    <option class="option_talla" value="40">40</option>
                                    <option class="option_talla" value="41">41</option>
                                    <option class="option_talla" value="42">42</option>
                                    <option class="option_talla" value="43">43</option>
                                </select>
                    </div>
                </div>
                <div class="row px-5 pt-5 d-flex justify-content-around">
                    <div class="col-6 font_select">
                        <p class="opciones_compra">Color: </p>
                    </div>
                    <div class="col-6 font_select">
                        <select class="select_color " name="color">
                            <option class="option_color" value="blanco">Blanco</option>
                            <option class="option_color" value="negro_verde">Negro/Verde</option>
                            <option class="option_color" value="rojo_azul">Rojo/Azul</option>
                            <option class="option_color" value="negro_amarillo">Negro/Amarillo</option>
                        </select>
                    </div>
                </div>
                <div class="row px-5 pt-5 d-flex justify-content-around">
                    <div class="col-6">
                        <p class="opciones_compra_precio">Precio:</p>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <h1 class="color_precio">'.$precio.'€</h1>
                    </div>   
                </div>
                <div class="row p-5">
                    <div class="col d-flex justify-content-center">
                            <input type="hidden" name="nombre" value="'.$nombre.'" />
                            <input type="hidden" name="precio" value="'.$precio.'" />
                            <input type="hidden" name="carpeta" value="'.$carpeta.'" />
                            <input type="hidden" name="succes" value="succes" />
                            <input class="btn_compra_zapatillas1" type="submit" value="Añadir al carrito" />
                        </form>
                    </div>
                </div>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      
            ';
        }else{
            $nombre = $_POST['nombre'];
            $talla = $_POST['talla'];
            $color = $_POST['color'];
            $carpeta = $_POST['carpeta'];
            $precio = $_POST['precio'];
            $usuario = $_SESSION['nombre_usuario'];

            $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
            // CONSULTA AÑADIR CARRITO
            $consulta_insertar = 'INSERT INTO carrito (usuario, nombre_zapatillas, talla, color, img, precio) VALUE(?,?,?,?,?,?)';

            $stmt = mysqli_stmt_init($conexion);
            $result = mysqli_stmt_prepare($stmt,$consulta_insertar);
                if($result != false){
                    mysqli_stmt_bind_param($stmt, "ssissi",  $usuario, $nombre, $talla, $color, $carpeta, $precio);
                    $reult=mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    echo '<script>window.location.replace("index.php");</script>'; 
                }else{
                    echo "Error: " . $consulta_insertar. "<br>" . mysqli_error($conexion);
                }

        }

// COMENTARIOS
        if(empty ($_REQUEST['comentario'])){ 
            $zapatillas = $_POST['zapatillas']; 
            echo '
            <div class="row  m-0 p-0">
                <div class="col-12 limit_EscribirComentario">
                    <div class="row ">
                        <div class="col mt-5 ">
                            <h3>Escribe un comentario: </h3>
                            <form action="webcompra.php" method="post">
                            <input class="comentaios" type="text" name="comentario"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col div_btn_comentairos">
                            <input type="hidden" name="zapatillas" value="'.$zapatillas.'" />
                            <input class="btn_comentairos"  type="submit" value="Guardar comentario" />
                        </div>
                            </form>
                    </div>
                </div>
            </div>     
            ';
        }else{
            $nombre = $nombre_usuario ;
            $comentario = $_REQUEST['comentario'];
            $zapatillas =  $_REQUEST['zapatillas'];

            $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
            // CONSULTA AÑADIR COMENTARIOS
            $consulta_comentarios = 'INSERT INTO comentarios (usuario, comentario, zapatillas) VALUE(?,?,?)';

            $stmt = mysqli_stmt_init($conexion);
            $result = mysqli_stmt_prepare($stmt,$consulta_comentarios);
                if($result != false){
                    mysqli_stmt_bind_param($stmt, "sss", $nombre,  $comentario, $zapatillas);
                    $reult=mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                }else{
                    echo "Error: " . $consulta_comentarios. "<br>" . mysqli_error($conexion);
                }
            mysqli_close($conexion);// cerramos la conexion con la base de datos
            echo '
            <script>
            function comentaior_succes_css_up(){
              const modal_comentario_succes = document.querySelectorAll(
                ".modal_comentario_succes"
              )[0]
              modal_comentario_succes.style.opacity = "1";
              modal_comentario_succes.style.visibility = "visible";
              comentarios_succes();
            }
            function comentarios_succes() {
              let timeout = setTimeout(comentarios_succes_css, 1500);
            }
            function comentarios_succes_css() {
              const modal_comentario_succes = document.querySelectorAll(
                ".modal_comentario_succes"
              )[0]
              modal_comentario_succes.style.opacity = "0";
              modal_comentario_succes.style.visibility = "hidden";
            }
            comentaior_succes_css_up();
          </script>

            <div class="row  m-0 p-0 ">
                <div class="col-12 limit_EscribirComentario">
                    <div class="row">
                        <div class="col">
                            <h3>Escribe un comentarios: </h3>
                            <form action="webcompra.php" method="post">
                            <input class="comentaios" type="text" name="comentario"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col div_btn_comentairos">
                            <input type="hidden" name="zapatillas" value="'.$zapatillas.'" />
                            <input class="btn_comentairos"  type="submit" value="Guardar comentario" />
                        </div>
                            </form>
                    </div>
                </div>
            </div> 
            ';
        }
        ?>               
        <div class="row mt-5 m-0 p-0">
            <div class="col ">
                <h3 class="limit_VerComentario ">Comentarios:</h3>
                <?php  
                $zapatillas =  $_REQUEST["zapatillas"];  
                $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                $consulta = "select * from comentarios where zapatillas = '".$zapatillas."'; ";
                mysqli_set_charset($conexion, "utf8");
                if ($resultado = mysqli_query($conexion, $consulta)) {
                     while ($fila = mysqli_fetch_row($resultado)) {
                      $usuario = $fila[1];
                      $comentario = $fila[2]; 
                      echo '
                        <div class="div_comentarios_recividos">
                            <h5>- Usuario: '.$usuario .'<h5>
                            <p class="comentaios_recividos">'.$comentario.'</p>
                        </div>
                        ';   
                     }
                     mysqli_free_result($resultado);
                }
                mysqli_close($conexion);
                ?>
           
     

<!-- FOOTER -->
    <div class="row mt-5 p-0 footer ">
        <div class="col">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-4 order-lg-1 order-md-1 order-2 avisos">
                    <p class="avisosp">. Aviso Legal</p>
                    <p class="avisosp">. Politica de privacidad</p>
                    <p class="avisosp">. Politica de cookies</p>
                </div>
                <div class="col-12 col-lg-8 col-md-8 order-lg-2 order-md-2 order-1">
                    <div class="row ">
                        <div class="col contactos1">
                            Contactos
                        </div>
                    </div>
                    <div class="row">
                        <div class="col contactos2">
                            <a  class="icono" href="https://www.instagram.com/"> <i class="bi bi-instagram "></i></a>
                            <a  class="icono  cta" href="#"><i class="bi bi-envelope-fill "></i></a> 
                            <a  class="icono" href="https://www.twitter.com/"> <i class="bi bi-twitter "></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center copyright">©Copyright 2022 Jorge Romero</div>
            </div> 
        </div>   
    </div>    
</div>


    <script src="js/modal.js"></script>
    <script src="js/modal_carrito.js"></script>
    <script src="js/modal_perfil.js"></script>
    <script src="js/modal_filtros.js"></script>
    <script src="js/login.js"></script>
    <script src="js/asincronia.js"></script>
    <script src="js/modal_error_login.js"></script>
    <script src="js/asincronia1.js"></script>
</body>
</html>

  
       
    


