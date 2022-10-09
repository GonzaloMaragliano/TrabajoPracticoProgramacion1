<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Account Login">
    <meta name="description" content="">
    <title>Inicio</title>
    <link rel="stylesheet" href="Diseñogral.css" media="screen">
<link rel="stylesheet" href="Inicio.css" media="screen">
    <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Inicio">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-black u-clearfix u-header u-header" id="sec-69de"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-body-alt-color u-text-default u-text-1">Trabajo Final Programacion I <span style="font-weight: 700;"></span>
        </p>     
      </div></header>
    <section class="u-clearfix u-white section1" id="sec-5adb">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-border-2 u-border-grey-70 u-container-style u-custom-border u-group u-opacity u-opacity-0 u-white u-group-1">
          
        <div class="u-container-layout u-container-layout-1">
            <h1 class="u-custom-font u-text u-text-default u-text-1">BIENVENIDO </h1>
            <?php
            if (isset( $_GET [ 'mensaje' ])) {
                echo  '<div id="mensaje" class="alert alert-primary text-center">
                    <p>' . $_GET [ 'mensaje' ]. '</p></div>' ;
            }
            ?>
            <div class="u-form u-login-control u-form-1">
              <form action="login.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" redirect="true">
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-label u-label-1">Usuario *</label>
                  <input type="text" placeholder="Ingrese usuario" id="username-a30d" name="usuario" class="u-border-2 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-1" required="" maxlength="30">

              </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-label u-label-2">Contraseña *</label>
                  <input type="password" placeholder="Ingrese contraseña" id="password-a30d" name="clave" class="u-border-2 u-border-grey-75 u-grey-5 u-input u-input-rectangle u-input-2" required="" maxlength="10">
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label u-label-3">Recordarme</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                  <input type="submit" value="submit" class="u-form-control-hidden">
                  <a class="u-border-none u-btn u-btn-submit u-button-style u-palette-1-base u-btn-1">Inicio Sesión<br>
                  </a>
                </div>
              </form>
            </div>
            <a href="Registro.php" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-none u-text-palette-1-base u-btn-2">¿No tiene cuenta? Registrese</a>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4f10"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Terciario Urquiza - Rosario- Santa Fe<br>Giacone - Maragliano - Morales<br>
        </p>
      </div></footer>
</body></html>
