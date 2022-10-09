<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Main</title>
    <link rel="stylesheet" href="Diseñogral.css" media="screen">
<link rel="stylesheet" href="Main.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
       
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Main">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-black u-clearfix u-header u-header" id="sec-69de"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-body-alt-color u-text-default u-text-1">Trabajo Final Programacion I <span style="font-weight: 700;"></span>
        </p>
      </div></header>
    <section class="u-align-center u-clearfix section1" id="sec-df0b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="Inicio.php" class="u-border-none u-btn u-button-style u-palette-2-base u-btn-1">Cerrar Sesión</a>

        <?php
        session_start();
        session_destroy();
        header('Location:Inicio.php?mensaje=Sesión cerrada con exito');
        ?>

        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-border-2 u-border-grey-75 u-container-style u-list-item u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/1828644.png" alt=""></span>
                <h3 class="u-text u-text-1">Alta de Facturas</h3>
                <a href="altaFca.php" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Alta</a>
              </div>
            </div>
            <div class="u-align-center u-border-2 u-border-grey-75 u-container-style u-list-item u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-icon-2"><img src="images/1828851.png" alt=""></span>
                <h3 class="u-text u-text-2">Baja de Facturas</h3>
                <a href="bajaFca.php" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">baja</a>
              </div>
            </div>
            <div class="u-align-center u-border-2 u-border-grey-75 u-container-style u-list-item u-repeater-item u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-icon-3"><img src="images/861627.png" alt=""></span>
                <h3 class="u-text u-text-3">Buscar Facturas</h3>
                <a href="buscarFca.php" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-4" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Buscar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4f10"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Terciario Urquiza - Rosario- Santa Fe<br>Giacone - Maragliano - Morales<br>
        </p>
      </div></footer>
  
</body></html>