<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleCustom.css">
    <script type="text/javascript" src="js/scriptsCustom.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Medidor de Recetas</title>
</head>
<body>
    <div class="general">
        <div class="imagen">
            <center>
            <img src="img/bakery.jpg" class="img-fluid">
            </center>
        </div>
        <div class="titulo">
            <center>
            <p class="display-3 ">Proporciones de recetas</p>
            <p class="h4"><small class="text-muted">Para obtener las cantidades de tus ingredientes rapidamente según la cantidad final que quieras hacer</small></p>
            </center>
        </div>
        <div class="login">
            <center>
                <div class="sombra">
                    <h1>Inicia sesión</h1>
                    <h5><small class="text-muted">¿Aún no tienes una cuenta? <a href="">Registrarme</a></small></h5>
                    <form action="verificarDatos.php" method="POST" id="formulario" @submit="checkForm">
                    <div class="form-group">
                        <br>
                        <label for="usuario">Usuario o correo electrónico</label>
                        <input type="email" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="example@email.com" id="correo"
                        v-model="correo">                        
                        <small id="emailHelp" class="form-text text-muted">Nunca compartimos tu correo con otras plataformas</small>
                        <small v-if="errorCorreo.length" class="text-danger">
                            <br>
                            <div class="alert alert-danger">Tienes que ingresar un correo para continuar</div>                            
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input type="password" class="form-control" id="clave" aria-describedby="emailHelp" placeholder="Escribe tu contraseña" id="clave"
                        v-model="clave">
                        <small v-if="errorClave.length" class="text-danger">
                            <br>
                            <div class="alert alert-danger">Tienes que ingresar tu clave para continuar</div>            
                        </small>
                        <small id="emailHelp" class="form-text text-muted">¿No la recuerdas? <a href="">Olvidé mi contraseña</a></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </center>
        </div>

        <!-- Script de verificacion de formulario -->
        <script>
            const app = new Vue({
                el: '#formulario',
                data: {
                    errorCorreo: [],
                    errorClave: [],
                    correo: null,
                    clave: null
                },
                methods:{
                    checkForm: function (e) {
                    if (this.correo && this.clave) {
                        return true;
                    }                  
                
                    this.errorCorreo = [];
                    this.errorClave = [];

                    if (!this.correo) {
                        this.errorCorreo.push('A');
                    }
                    if (!this.clave) {
                        this.errorClave.push('A');
                    }

                    e.preventDefault();
                    }
                }
            })
        </script>


        <div class="footer">
            <div class="container sombra dark">
                <div class="row">
                  <div class="col-sm">
                    <center>
                        <img src="img/calcular.png" class="img-fluid mx-auto d-block calculadora">
                    </center>
                  </div>
                  <div class="col-sm">
                    <h3 class="text-white">¿Cómo funciona esta aplicación?</h3>
                    <p class="lead text-light">Basandose en las recetas que ingreses en tu <b>invetario personal</b>, el programa calculará y te dará los gramos exactos de cada ingrediente según la cantidad de producto final que desees preparar. Todo en un proceso facil y confiable.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="container">
            <div class="row">
              <div class="col-sm">
                  <center>
                    <img src="img/whatsapp.png" class="img-fluid mx-auto d-block whatsapp">
                    <p class="lead text-light">Quiero obtener más información mediante WhatsApp <a href="https://wa.me/573045958617?text=Hola!%20Quiero%20recibir%20más%20información%20sobre%20la%20calculadora%20de%20proporciones">contactando con el administrador</a></p>
                </center>
              </div>
            </div>
        </div>
    </div>    
</body>
</html>