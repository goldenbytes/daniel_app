<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pirate Party</title>
    <link rel="stylesheet" href={!! asset('css/materialize.min.css') !!}>
    <link rel="stylesheet" href={!! asset('css/font-awesome.min.css') !!}>
    <link rel="stylesheet" href={!! asset('css/MyCSS.css') !!}>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="http://icons.iconarchive.com/icons/aha-soft/torrent/512/pirate-icon.png" />
  </head>
  <body>
    <div class="fondo3">
  		<div class="cuerpo2">
        <div class="center-align">
          <img src={!! asset('Imagenes/logo.png') !!}  class="responsive-img logo-admin"  alt="Logo de Gorod"/>
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                  <i class="fa fa-search prefix"></i>
                  <input id="icon_prefix" type="text" class="validate white-text">
                  <label for="icon_prefix">Type the keyword...!!!</label>
              </div>
              <button type="submit" class="waves-effect waves-light btn-large Colordeboton">
                Search
              </button>
            </div>
          </form>
            <ul class="collection" id="response">
            </ul>
          </div>
  		</div>
  	</div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large red" href="./levels">
        <i class="fa fa-arrow-left"></i>
      </a>
    </div>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/paratodos.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/pronunciacion.js') !!}"></script>
  </body>
</html>
