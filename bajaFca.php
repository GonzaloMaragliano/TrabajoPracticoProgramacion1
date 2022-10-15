<?php session_start(); ?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Baja de Factura</title>
    <link rel="stylesheet" href="Diseñogral.css" media="screen">
    <link rel="stylesheet" href="bajaFca.css" media="screen">
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="buscarFca">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-gradient u-xl-mode" data-lang="es" style="background-image: linear-gradient(to right, black, white);"><header class="u-black u-clearfix u-header u-header" id="sec-69de"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-body-alt-color u-text-default u-text-1">Trabajo Final Programacion I <span style="font-weight: 700;"></span>
        </p>
      </div></header> 
    <section class="u-align-center u-clearfix u-white section1" id="sec-f6b4">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-black u-text-default u-text-1">Baja factura</p>
        <div class="u-align-center u-border-2 u-border-grey-75 u-form u-form-1">


          <form action="formBajaFc.php" method="POST" class="u-clearfix u-form-spacing-14 u-form-vertical u-inner-form" style="padding: 34px;" source="email" name="form">

            <div class="u-form-group u-label-left">
              <label for="number" class="u-custom-font u-font-arial u-label u-spacing-7 u-text-black u-label-2">Número de factura</label>
              <input type="text" min="0" id="number" name="nroFca" class="u-border-1 u-border-grey-30 u-grey-5 u-input u-input-rectangle u-radius-6 u-text-black u-input-2" required="required">
            </div>

            <div class="u-form-group u-form-submit u-label-left">
              <label class="u-label u-spacing-7 u-text-black u-label-5"></label>
              
              <div class="u-btn-submit-container">
                <div class="u-align-right u-btn-submit-container">
                  <input type="submit" class="u-btn u-btn-submit u-button-style u-btn-1" value="Borrar">
                  <input  type="search" class="u-btn u-btn-submit u-button-style u-btn-1" value="Buscar">
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
            <tbody class="u-table-body">
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-1">N° de Factura</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-2">Nombre del cliente</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-3">Fecha de carga</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell u-table-cell-4">Fecha de factura</td>
              </tr>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Columna 1</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
                <td class="u-border-3 u-border-grey-30 u-table-cell">Description</td>
              </tr>
            </tbody>
          </table>
        </div>
        <a href="Main.php" class="u-border-none u-btn u-button-style u-palette-3-base u-btn-1"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/1946488-2e7956ab.png" alt=""></span>&nbsp;
        </a>
      </div>
    </section>
      
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="footer"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Terciario Urquiza - Rosario- Santa Fe<br>Giacone - Maragliano - Morales<br>
        </p>
      </div></footer>
  
</body></html>
