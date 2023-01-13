<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR-Sneakers</title>
    <link rel="shortcut icon" href="img/favicon.ico">
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
    <link rel="stylesheet" href="css/modal_tarjeta.css?" <?php echo time() ;?> >

</head>
<body >
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
<!-- MODAL ALERTA USUARIO_INCORRECTO -->
<div class="row">
    <div class="col modal_usuario_incorrecto">
        <div class="row">
            <div class="col elmodal_usuario_incorrecto">
                <div class="row">
                    <div class="col">
                        <p class="usuario_incorrecto">El usuario o contraseña no coinciden</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL ALERTA REGISTRO_INCORRECTO -->
<div class="row">
    <div class="col modal_registro_incorrecto">
        <div class="row">
            <div class="col elmodal_registro_incorrecto">
                <div class="row">
                    <p class="col registro_incorrecto">El usuario ya existe o introdujo mal los datos</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL ALERTA REGISTRO_CORRECTO -->
<div class="row">
    <div class="col modal_registro_succes">
        <div class="row">
            <div class="col elmodal_registro_succes">
                <div class="row">
                    <div class="col">
                        <p class="registro_succes">El usuario se ha creado correctamente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL ALERT COMPRA EXITOSA -->
<div class="row">
      <div class="col modal_compra">
        <div class="row">
          <div class="col elmodal_compra">
            <div class="row">
              <div class="col jus">
                <p class="zapa_eliminada">Compra exitosa</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- MODAL REGISTRARSE -->
<div class="row centrar_modal1">
<div class="col modal-container1" id="modal_container1">
    
    <div class="row modal1">
        <div class=" col">
            <div class="row ">
                <div class="col d-flex justify-content-end cerrar1">
                    <button class="cerrar_btn" id="close11">X</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="formulario_login1">Registrarse</h1>
                </div>
            </div>

            <?php
             if(empty ($_POST['user']) || empty ($_POST['email']) || empty ($_POST['ciudad']) || empty ($_POST['calle']) || empty ($_POST['password'])){ 

                echo '  
                    <div class="row">
                    <div class="col">
                    <form action="index.php" method="post">
                    <div class="row pb-3">
                    <div class="col">
                    <p>Usuario:</p>
                    </div>
                    <div class="col">
                        <input class="input_text" type="text" name="user" placeholder="Usuario"/>
                    </div>
                    </div>
                    <div class="row pb-3">
                    <div class="col">
                    <p>Correo:</p>
                    </div>
                    <div class="col">
                        <input class="input_text" type="email" name="email" placeholder="Corrreo"/>
                    </div>
                    </div>
                    <div class="row pb-3">
                    <div class="col">
                    <p>Ciudad:</p>
                    </div>
                    <div class="col">
                        <input class="input_text" type="text" name="ciudad" placeholder="Ciudad"/>
                    </div>
                    </div>
                    <div class="row pb-3">
                    <div class="col">
                    <p>Calle:</p>
                    </div>
                    <div class="col">
                        <input class="input_text" type="text" name="calle" placeholder="Calle"/>
                    </div>
                    </div>
                    <div class="row pb-3">
                    <div class="col">
                    <p>Contraseña:</p>
                    </div>
                    <div class="col">
                        <input class="input_text" type="password" name="password" placeholder="Contraseña"/>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col d-flex justify-content-center">
                        <input class="btn_inicio_sesion"  id="close1" type="submit" value="Registrarse" />    
                    </div>
                    </div>
                    </form>  
                ';
            }else{
                $nombre = $_POST['user'];
                $email =  $_POST['email'];
                $password =  $_POST['password'];
                $calle =  $_POST['calle'];
                $ciudad =  $_POST['ciudad'];
     
                $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                // CONSULTA COMPROBAR QUE NO ESTE USUARIO
                $consulta_user = 'SELECT * FROM usuarios WHERE usuario = "'.$nombre.'"';

                if ($resultado = mysqli_query($conexion, $consulta_user)) {
                    if($fila = mysqli_fetch_row($resultado)){
                        unset($nombre);
                        unset($email);
                        unset($password);
                        unset($calle);
                        unset($ciudad);
                        echo '
                            <script>
                                function registros_incorrecto_css_up(){
                                const modal_registro_incorrecto = document.querySelectorAll(
                                    ".modal_registro_incorrecto"
                                )[0];
                                modal_registro_incorrecto.style.opacity = "1";
                                modal_registro_incorrecto.style.visibility = "visible";
                                registros_incorrecto();
                                }
                                function registros_incorrecto() {
                                let timeout = setTimeout(registros_incorrecto_css, 2000);
                                }
        
                                function registros_incorrecto_css() {
                                const modal_registro_incorrecto = document.querySelectorAll(
                                    ".modal_registro_incorrecto"
                                )[0];
                                modal_registro_incorrecto.style.opacity = "0";
                                modal_registro_incorrecto.style.visibility = "hidden";
                                window.location.replace("index.php");
                                }
                                registros_incorrecto_css_up();
                            </script>
                            
                        ';
                    }else{
                        // CONSULTA REGISTRARSE
                        $consulta_registrarse = 'INSERT INTO usuarios (usuario, correo, contrasena, calle, ciudad) VALUE(?,?,?,?,?)';

                        $stmt = mysqli_stmt_init($conexion);
                        $result = mysqli_stmt_prepare($stmt,$consulta_registrarse);
                            if($result != false){
                                mysqli_stmt_bind_param($stmt, "sssss", $nombre,  $email, $password, $calle, $ciudad);
                                $reult=mysqli_stmt_execute($stmt);
                                mysqli_stmt_close($stmt);
                                echo '
                                    <script>
                                        function registro_succes_css_up(){
                                        const modal_registro_succes = document.querySelectorAll(
                                            ".modal_registro_succes"
                                        )[0];
                                        modal_registro_succes.style.opacity = "1";
                                        modal_registro_succes.style.visibility = "visible";
                                        registro_succes();
                                        }

                                        function registro_succes() {
                                        let timeout = setTimeout(registro_succes_css, 1500);
                                        }

                                        function registro_succes_css() {
                                        const modal_registro_succes = document.querySelectorAll(
                                            ".modal_registro_succes"
                                        )[0];
                                        modal_registro_succes.style.opacity = "0";
                                        modal_registro_succes.style.visibility = "hidden";
                                        window.location.replace("index.php");
                                        }
                                        registro_succes_css_up();
                                    </script>
                                ';
                            }else{
                                unset($nombre);
                                unset($email);
                                unset($password);
                                unset($calle);
                                unset($ciudad);
                                echo '
                                    <script>
                                        function registros_incorrecto_css_up(){
                                        const modal_registro_incorrecto = document.querySelectorAll(
                                            ".modal_registro_incorrecto"
                                        )[0];
                                        modal_registro_incorrecto.style.opacity = "1";
                                        modal_registro_incorrecto.style.visibility = "visible";
                                        registros_incorrecto();
                                        }
                                        function registros_incorrecto() {
                                        let timeout = setTimeout(registros_incorrecto_css, 2000);
                                        }
                
                                        function registros_incorrecto_css() {
                                        const modal_registro_incorrecto = document.querySelectorAll(
                                            ".modal_registro_incorrecto"
                                        )[0];
                                        modal_registro_incorrecto.style.opacity = "0";
                                        modal_registro_incorrecto.style.visibility = "hidden";
                                        window.location.replace("index.php");
                                        }
                                        registros_incorrecto_css_up();
                                    </script>
                                    
                                ';
                            }
                    }
                }                
                mysqli_close($conexion);// cerramos la conexion con la base de datos
             }

            ?>
           
        </div>
    </div>
</div>
</div> 
<!-- MODAL INICIO DE SESION -->
<div class="row centrar_modal2">
<div class="col modal_container2" id="modal_container2">
    <div class="row modal2">
        <div class=" col">
            <div class="row ">
                <div class="col d-flex justify-content-end cerrar1">
                    <button class="cerrar_btn" id="close21">X</button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="formulario_login2">Iniciar Sesión</h1>
                </div>
            </div>
            
                    <?php
                        if(!isset($_REQUEST['usuario'])){    

                        echo '
                            <div class="row">
                            <div class="col">
                            <form action="index.php" method="post"> 
                            <div class="row pb-3 ">
                                <div class="col">
                                    <p>Usuario:</p>
                                </div>
                                <div class="col">
                                    <input class="input_text" type="text" name="usuario" placeholder="Usuario"/>
                                </div>
                            </div>
                            <div class="row pb-3">
                            <div class="col">
                                <p>Contraseña:</p>
                            </div>
                            <div class="col">
                                <input class="input_text" type="password"  name="contraseña" placeholder="Contraseña"/>
                            </div>
                            </div>  
                            </div>
                            </div>
                            <div class="row">
                            <div class="col d-flex justify-content-center">
                                <input class="btn_inicio_sesion"  id="close2" type="submit" value="Iniciar Sesión" />
                            </div>
                            </div>
                            </form>
                        ';
                        }else{
                            $usuario = $_POST['usuario'];
                            $contraseña =  $_POST['contraseña'];
                            $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                            mysqli_set_charset($conexion, "utf8");
                            $consulta = 'SELECT * FROM usuarios WHERE usuario = "'.$usuario.'" AND contrasena = "'.$contraseña.'";' ;    
                                if ($resultado = mysqli_query($conexion, $consulta)) {
                                    if($fila = mysqli_fetch_row($resultado)){
                                        $_SESSION["nombre_usuario"] = $usuario;
                                    }else{
                                        unset($_POST['usuario']);
                                        unset($_POST['contraseña']);
                                        echo '
                                        <script>
                                        function usuario_incorrecto_css_up(){
                                            const modal_usuario_incorrecto = document.querySelectorAll(
                                                ".modal_usuario_incorrecto"
                                              )[0];
                                              modal_usuario_incorrecto.style.opacity = "1";
                                              modal_usuario_incorrecto.style.visibility = "visible";
                                              usuario_incorrecto();
                                        }                                       
                                        function usuario_incorrecto() {
                                          let timeout = setTimeout(usuario_incorrecto_css, 2000);
                                        }
                                        function usuario_incorrecto_css() {
                                          const modal_usuario_incorrecto = document.querySelectorAll(
                                            ".modal_usuario_incorrecto"
                                          )[0];
                                          modal_usuario_incorrecto.style.opacity = "0";
                                          modal_usuario_incorrecto.style.visibility = "hidden";
                                          window.location.replace("index.php");
                                        }
                                        usuario_incorrecto_css_up();
                                      </script>
                                      ';
                                    }
                                }else{
                                    unset($usuario);
                                    unset($contraseña);
                                    echo '
                                    <script>
                                    function usuario_incorrecto_css_up(){
                                        const modal_usuario_incorrecto = document.querySelectorAll(
                                            ".modal_usuario_incorrecto"
                                          )[0];
                                          modal_usuario_incorrecto.style.opacity = "1";
                                          modal_usuario_incorrecto.style.visibility = "visible";
                                          usuario_incorrecto();
                                    }                                       
                                    function usuario_incorrecto() {
                                      let timeout = setTimeout(usuario_incorrecto_css, 2000);
                                    }
                                    function usuario_incorrecto_css() {
                                      const modal_usuario_incorrecto = document.querySelectorAll(
                                        ".modal_usuario_incorrecto"
                                      )[0];
                                      modal_usuario_incorrecto.style.opacity = "0";
                                      modal_usuario_incorrecto.style.visibility = "hidden";
                                      window.location.replace("index.php");
                                    }
                                    usuario_incorrecto_css_up();
                                  </script>
                                  ';
                             
                            };
                            mysqli_close($conexion);// cerramos la conexion con la base de datos
                    
                    
                        }
                    ?> 
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
                            <input type="hidden" name="precio_total" value="'.$precio_total.'" />
                            <button class="btn_carrito_comprar"  type="submit" name="carrito_comprar">Comprar</button>
                        </form>
                    ';
                        // COMPRA FINAL
                        if( $precio_total > 0 && isset($_POST['carrito_comprar'])){

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
                                    echo '
                                        <script>
                                            function compra(){
                                                const modal_compra = document.querySelectorAll(".modal_compra")[0];
                                                modal_compra.style.opacity = "1";
                                                modal_compra.style.visibility = "visible";
                                                compra_incorrecto();
                                            }
                                            function compra_incorrecto() {
                                            let timeout = setTimeout(compra_incorrecto_css, 2000);
                                            }
                    
                                            function compra_incorrecto_css() {
                                                const modal_compra = document.querySelectorAll(".modal_compra")[0];
                                                modal_compra.style.opacity = "0";
                                                modal_compra.style.visibility = "hidden";
                                                window.location.replace("index.php")
                                            }
                                            compra();
                                        </script>
                                    ';
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
                    <button class="btn_perfil_cerrar_sesion" type="submit" name="btn_cerrar_sesion" value="btn_cerrar_sesion">Cerrar Sesión</button>
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

<div class="container-fluid ">
    <!-- HEADER -->
    <div class="row  header">
        <div class="col-lg-8 col-md-4 col- 12 text-left titulo ">JR-Sneakers</div>
        <div class="col-lg-4 col-md-8 col-12">

            <?php
            if(!isset( $_SESSION["nombre_usuario"])){
                echo '  
                    <div class="row">
                        <div class="col-6"><button class="btn-header" id="open2">Iniciar Sesión</button></div>
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
      
        
    <div class=" m-0 p-0 w-auto tamaño_body" id="btn_pedidos_asincrono" >
    <!-- IMG PASANDO -->
            <div class="row p-0">
                <div class="col-12 p-0 ">
                    <div class="carousel slide carousel-fade" id="mi-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <img class="mx-auto d-block img-fluid " src="img/run1.png" alt="">
                            </div>
                            <div class="carousel-item " >
                                <img class="mx-auto d-block img-fluid" src="img/run2.png" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img class="mx-auto d-block img-fluid" src="img/run4.png" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img class="mx-auto d-block img-fluid" src="img/run5.png" alt="">
                            </div>
                            <div class="carousel-item ">
                                <img class="mx-auto d-block img-fluid" src="img/run6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    

            <?php 
            if(!isset($_REQUEST['filtros'])){
                echo'
                    <div class="row  w-100 m-5 justify-content-center fila_filtros">
                        <div class="col-lg-3 col-6">Filtrar  marca: </div>
                        <div class="col-lg-3 col-6">
                        <form action ="index.php" method = "POST">
                            <select class="selec_filtros_marcas" name="filtro"> 
                                        <option value="adidas">Adidas</option>
                                        <option value="asics">Asics</option>
                                        <option value="nike">Nike</option>
                                        <option value="converse">Converse</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-6">
                                <button class="btn_filtros" type="submit" name="filtros" value="filtros">Filtrar</button>
                            </div>
                            <div class="col-lg-3 col-6">
                                <button class="btn_filtros" type="submit" name="delete_filtros" value="delete_filtros">Eliminar filtros</button>
                            </div>
                        </form>
                    </div>

                    <div class="row p-0  tarjetas">
                    ';
                    if(isset($_REQUEST['delete_filtros'])){
                        unset($_REQUEST['filtro']);
                    }
                $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                mysqli_set_charset($conexion, "utf8");
                    $consulta = "SELECT * FROM zapatillas ";
                    if ($resultado = mysqli_query($conexion, $consulta)) {
                        while ($fila = mysqli_fetch_row($resultado)) {
                            
                            echo '
                            <div class="col-lg-3 col-md-6 pb-5 d-flex justify-content-center">
                                <div class="card">
                                    <div class="card-img">
                                        <img class="img_zapatillas" src="img/'.$fila[4].'/'.$fila[4].'1.png" alt="">
                                        <h3 class="card-tittle">'.$fila[0].'</h3>
                                        <h4 class="card-precio">'.$fila[3].'€</h4>
                                    </div>
                                    <div class="card-content">
                                        '.$fila[1].'<br> ';
                                        if(!isset( $_SESSION["nombre_usuario"])){
                                            echo'
                                    </div>
                                </div>
                            </div>
                                            ';
                                        }else{
                                            echo'
                                                <form  class="btn_compra" method="post" action="webcompra.php">
                                                    <input type="hidden" name="zapatillas" value="'.$fila[0].'" />
                                                    <input  class="btn_submit" type="submit" value="Configurar">
                                                </form>
                                    </div>
                                </div>
                            </div>
                                            ';
                                        }
                    }
                    mysqli_free_result($resultado);
                }
                mysqli_close($conexion);
            }else{
                $marca = $_REQUEST['filtro'];
                  echo'
                    <div class="row  w-100 m-5 justify-content-center fila_filtros">
                    <div class="col-lg-3 col-6">Filtrar marca: </div>
                    <div class="col-lg-3 col-6">
                    <form action ="index.php" method = "POST">
                        <select class="selec_filtros_marcas" name="filtro"> 
                                    <option value="adidas">Adidas</option>
                                    <option value="asics">Asics</option>
                                    <option value="nike">Nike</option>
                                    <option value="converse">Converse</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn_filtros" type="submit" name="filtros" value="filtros">Filtrar</button>
                        </div>
                        <div class="col-lg-3 col-6">
                            <button class="btn_filtros" type="submit" name="delete_filtros" value="delete_filtros">Eliminar filtros</button>
                        </div>
                    </form>
                </div>

                <div class="row p-0  tarjetas">
                ';
                    if(isset($_REQUEST['delete_filtros'])){
                        unset($_REQUEST['filtro']);
                    }
                $conexion = mysqli_connect('localhost', 'root', '', 'jr-sneakers');
                mysqli_set_charset($conexion, "utf8");
                    $consulta = "SELECT * FROM zapatillas WHERE marca = '$marca';";
                    if ($resultado = mysqli_query($conexion, $consulta)) {
                        while ($fila = mysqli_fetch_row($resultado)) {
                            
                            echo '
                            <div class="col-lg-3 col-md-6 pb-5 d-flex justify-content-center">
                                <div class="card">
                                    <div class="card-img">
                                        <img class="img_zapatillas" src="img/'.$fila[4].'/'.$fila[4].'1.png" alt="">
                                        <h3 class="card-tittle">'.$fila[0].'</h3>
                                        <h4 class="card-precio">'.$fila[3].'€</h4>
                                    </div>
                                    <div class="card-content">
                                        '.$fila[1].'<br> ';
                                        if(!isset( $_SESSION["nombre_usuario"])){
                                            echo'
                                    </div>
                                </div>
                            </div>
                                            ';
                                        }else{
                                            echo'
                                                <form  class="btn_compra" method="post" action="webcompra.php">
                                                    <input type="hidden" name="zapatillas" value="'.$fila[0].'" />
                                                    <input  class="btn_submit" type="submit" value="Configurar">
                                                </form>
                                    </div>
                                </div>
                            </div>
                                            ';
                                        }
                    }
                    mysqli_free_result($resultado);
                }
                mysqli_close($conexion);
            }
            ?>

        </div>
    </div>


<!-- FOOTER -->
        <div class="row p-0 footer">
            <div class="col">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4 order-lg-1 order-md-1 order-2 avisos">
                        <p class="avisosp">. Aviso Legal</p>
                        <p class="avisosp">. Política de privacidad</p>
                        <p class="avisosp">. Política de cookies</p>
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
    <!-- <script src="js/index.js"></script> -->
    <script src="js/modal.js"></script>
    <script src="js/modal_carrito.js"></script>
    <script src="js/modal_perfil.js"></script>
    <script src="js/modal_filtros.js"></script>
    <script src="js/login.js"></script>
    <script src="js/asincronia.js"></script>
    <script src="js/modal_error_login.js"></script>
    <script src="js/asincronia1.js"></script>
</body>
