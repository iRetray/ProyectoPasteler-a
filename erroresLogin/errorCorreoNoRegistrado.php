<?php
$correo = $_GET["correo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" href="estiloErrores.css">
    <script type="text/javascript" src="../js/scriptsCustom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
    <script src="../js/jquery.min.js"></script>    
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>  
    <script src="../js/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-vue/2.13.0/bootstrap-vue.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Correo no registrado</title>
</head>
<body class="dark">
    <div class="general">
        <div class="titulo">
            <center>
            <p class="display-3 text-white">Proporciones de recetas</p>
            <p class="h4"><small class="text-light">Para obtener las cantidades de tus ingredientes rapidamente según la cantidad final que quieras hacer</small></p>
            </center>
        </div>
        <div class="error">
            <center>
                <div class="sombra">        
                    <h1 class="text-danger">¡Vaya!</h1>
                    <h5><small class="text-danger">Ocurrió un error al iniciar sesión</small></h5>
                    <br>                    
                    <div class="alert alert-warning" role="alert">
                    El correo 
                    <strong><?php echo ($correo); ?></strong>
                    no está registrado en el sistema.
                    </div>
                    <img src="../img/horneado.jpg" class="img-thumbnail errorImg">
                    <p class="lead">Para poder acceder a la aplicación</p> 
                    <button type="button" class="btn btn-primary btn-lg" onclick="location.href='https://www.facebook.com'">Regístrate</button>                 
                </div>
            </center>
        </div>

        <!-- Script de verificacion de formulario -->
        <script>
            var url = 'verificacionAXIOS/crud.php';
            const app = new Vue({
                el: '#formulario',
                data: {
                    errorCorreo: false,
                    errorClave: false,
                    correo: null,
                    clave: null
                },
                methods:{
                    checkForm: function (e) {
                    if (this.correo && this.clave) {
                        return true;
                    }                  
                
                    this.errorCorreo = false;
                    this.errorClave = false;

                    if (!this.correo) {
                        this.errorCorreo = true;
                    }
                    if (!this.clave) {
                        this.errorClave = true;
                    }                                        

                    e.preventDefault();
                    }
                },
                computed: {
                estadoCorreo() {
                    return this.correo ? true : false
                },
                estadoClave() {
                    return this.clave ? true : false
                }
                }
            })
        </script>
    </div>    
</body>
</html>