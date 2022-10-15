<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Buscar Factura</title>
    <link rel="stylesheet" href="Diseñogral.css" media="screen">
<link rel="stylesheet" href="buscarFca.css" media="screen">
    <meta name="generator" content="Nicepage 4.19.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  </head>
  <body class="u-body u-gradient u-xl-mode" data-lang="es" style="background-image: linear-gradient(to right, black, white);"><header class="u-black u-clearfix u-header u-header" id="sec-69de"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-body-alt-color u-text-default u-text-1">Trabajo Final Programacion I <span style="font-weight: 700;"></span>
        </p>
      </div></header>
    <section class="u-align-center u-clearfix u-white section1" id="sec-f6b4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-black u-text-default u-text-1">Buscar factura</p>
        <?php
            if (isset( $_GET [ 'mensaje' ])) {
                echo  '<div id="mensaje" class="alert alert-primary text-center">
                    <p>' . $_GET [ 'mensaje' ] . '</p></div>' ;
            }
            ?>
        <div class="u-align-center u-border-2 u-border-grey-75 u-form u-form-1">
          <form action="formBuscarFc.php" method="POST" class="u-clearfix u-form-spacing-14 u-form-vertical u-inner-form" style="padding: 34px;" source="email" name="form">
          
            <div class="u-form-group u-label-left">
              <label for="text" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-2">Nombre del cliente</label>
              <input type="text" min="0" id="NombreCliente" name="NombreCliente" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-2" required="required">
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-spacing-1 u-text-black u-label-5"></label>
              <input type="submit" value="submit" class="u-form-control-hidden">
              <div class="u-btn-submit-container">
                <div class="u-align-right u-btn-submit-container">
                  <input type="submit" class="u-btn u-btn-submit u-button-style u-btn-1" value="Buscar">
                  </a>
                </div>
              </div>
            </div>
          </form>
        </div>
        </a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-2" id="sec-f29f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="13.4%">
              <col width="36.6%">
              <col width="25%">
              <col width="25%">
            </colgroup>
            
            <tbody class="u-table-body">
              <tr style="height: 64px;">
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-1">N° de Factura</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-2">Nombre del cliente</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-3">Fecha de carga</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">Fecha de factura</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-border-3 u-border-grey-30 u-table-cell">Columna 1</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-border-3 u-border-grey-30 u-table-cell">Columna 2</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-border-3 u-border-grey-30 u-table-cell">Columna 3</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
              </tr>
              <tr style="height: 65px;">
                <td class="u-border-3 u-border-grey-30 u-table-cell">Columna 4</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Fecha</td>
              </tr>
            </tbody>
          </table>
        </div>
        <a href="Main.php" class="u-border-none u-btn u-button-style u-palette-3-base u-btn-1"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/1946488-2e7956ab.png" alt=""></span>&nbsp;
        </a>
      </div>
    </section>
      
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4f10"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Terciario Urquiza - Rosario- Santa Fe<br>Giacone - Maragliano - Morales<br>
        </p>
      </div></footer>
  
</body></html>
