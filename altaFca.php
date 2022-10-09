<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Alta de Factura</title>
    <link rel="stylesheet" href="Diseñogral.css" media="screen">
    <link rel="stylesheet" href="altaFca.css" media="screen">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body u-gradient u-xl-mode" data-lang="es" style="background-image: linear-gradient(to right, black, white);"><header class="u-black u-clearfix u-header u-header" id="sec-69de"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-body-alt-color u-text-default u-text-1">Trabajo Final Programacion I <span style="font-weight: 700;"></span>
        </p>
      </div></header>
    <section class="u-align-center u-clearfix u-white section1" id="sec-f6b4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-black u-text-default u-text-1">Alta de factura</p>
        <div class="u-align-center u-border-2 u-border-grey-75 u-form u-form-1">
          <form class="u-clearfix u-form-spacing-14 u-form-vertical u-inner-form" style="padding: 34px;" source="email" name="form">
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-left">
              <label for="number" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-1">N° de Factura</label>
              <input type="number" min="0" id="number" name="nroFactura" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-1" required="">
            </div>
            <div class="u-form-group u-label-left">
              <label for="name" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-2">Nombre Cliente</label>
              <input type="name" id="text" name="NombreCliente" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input--2" required="required">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-left">
              <label for="date" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-3">Fecha de Carga</label>
              <input type="date" placeholder="01/01/2022" id="date" name="date" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-3" required="Introduzca una fecha">
            </div>
            <div class="u-form-group u-form-partition-factor-2 u-label-left">
              <label for="date" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-4">Fecha de Factura</label>
              <input type="date" placeholder="01/01/2022" id="date" name="date-1" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-4" required="Introduzca una fecha">
            </div>
            <div class="u-form-group u-label-left">
              <label for="bultos" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-5">Cant. Bultos</label>
              <input type="number" min="0" placeholder="" id="bultos" name="bultos" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-5">
            </div>
            <div class="u-form-group u-form-message u-label-left">
              <label for="comentario" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-6">Comentario</label>
              <textarea rows="1" cols="20" id="comentario" name="comentario" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-6"></textarea>
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-spacing-7 u-text-black u-label-7"></label>
              <input type="submit" value="submit" class="u-form-control-hidden">
              <div class="u-btn-submit-container">
                <div class="u-align-right u-btn-submit-container">
                  <input type="reset" class="u-btn u-btn-submit u-button-style u-btn-1" value="Borrar">
                  <input  type="submit" class="u-btn u-btn-submit u-button-style u-btn-1" value="Confirmar">
                </div>
              </div>
            </div>
          </form>
        </div>
        <a href="Main.php" class="u-border-none u-btn u-button-style u-palette-3-base u-btn-3"><span class="u-file-icon u-icon u-text-white u-icon-2"><img src="images/1946488-2e7956ab.png" alt=""></span>&nbsp;</a>
      </div>
    </section>
    
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4f10"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Terciario Urquiza - Rosario- Santa Fe<br>Giacone - Maragliano - Morales<br>
        </p>
      </div></footer>
</body></html>