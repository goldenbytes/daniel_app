<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pirate Party</title>
    <link rel="stylesheet" href="{!! asset('css/materialize.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/MyCSS.css') !!}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/aha-soft/torrent/512/pirate-icon.png" />
  </head>
  <body>

    <div class="fondo3">

  		<div class="cuerpo2">
          <img src={!! asset('Imagenes/logo.png') !!}  class="responsive-img logo-admin"  alt="Logo de Gorod"/>
        <div class="left-align">
            <div class="row" style="width:100%" id="lista_jugadores">
            </div>
          </div>
  		</div>
      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <button class="btn-floating btn-large red" onclick="abrirmodal()">
          <i class="fa fa-info"></i>
        </button>
      </div>
  	</div>
    <div id="freewords" class="modal bottom-sheet">
      <div class="modal-content">
        <h4>Free Words</h4>
        <p id="texto_palabras"></p>
      </div>
      <div class="modal-footer">
        <button class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</button>
      </div>
    </div>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/paratodos.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/admin_jugadores.js') !!}"></script>
  </body>
</html>