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
  <div class="fondo2">
      <div class="cuerpo2">
          <img src={!! asset('Imagenes/logo.png') !!}  class="responsive-img logo-admin"  alt="Logo de Gorod"/>
          <div class="caption center-align">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                      <i class="fa fa-user prefix"></i>
                      <input id="icon_prefix" type="text" class="validate">
                      <label for="icon_prefix">Your Name</label>
                  </div>
                  <button type="button" class="waves-effect waves-light btn-large Colordeboton">
                      Next
                  </button>
                </div>
              </form>
          </div>
	</div>
  </div>
  <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/paratodos.js') !!}"></script>
</body>
</html>
