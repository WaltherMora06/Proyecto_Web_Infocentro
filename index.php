<link rel="stylesheet" href="CSS/loging.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="main">
    <div class="container">
        <center>
            <div class="middle">
                <div id="login">
                    <form action="login.php" method="POST">
                        <fieldset class="clearfix">
                            <p><span class="fa fa-user"></span><input type="text" id="txt_usuario" Placeholder="Usuario" required></p> <!-- Caja de texto para el usuario  -->
                            <p><span class="fa fa-lock"></span><input type="password" id="txt_clave" Placeholder="Contraseña" required></p> <!-- Caja de texto para la contraseña" -->
                            <div>
                                <span style="width:48%;color :#ffffff; text-align:left;  display: inline-block;"><a class="small-text" href="#">Olvido la Contraseña?</a></span>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input  type="Submit"  value="Iniciar Sesion" onclick="ingresar();"></span> 
                            </div>
                        </fieldset>
                        <div class="clearfix"></div>
                    </form>
                    <div class="clearfix"></div>
                </div> <!-- Fin del Loging -->
                <div class="logo">
                    <img src="./Imagenes/logo_puntos_grande.png">
                    <div class="clearfix"></div>
                </div>
            </div>
        </center>
    </div>
</div>
<script src="./JS/jquery.min.js"></script>
<script>
                                      function ingresar() {
                                          var usuario = $('#txt_usuario').val();
                                          var clave = $('#txt_clave').val();
                                          //alert(usuario);
                                          //alert(clave);
                                          $.ajax({
                                              type: 'POST',
                                              url: 'verificar.php',
                                              data: {
                                                  usuario_p: usuario,
                                                  clave_p: clave
                                              },
                                              success: (function (data) {
                                                  if (data === '1') {
                                                      alert("Bienvenidos al Sistema")
                                                      window.location = "index.php";
                                                  }
                                                  if (data === '0') {
                                                      alert("Usuario o Clave incorrecto")
                                                  }
                                              })
                                          });

                                      }

</script>