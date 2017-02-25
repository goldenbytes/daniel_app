<!DOCTYPE html>
<html >
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
          <div class="caption center-align">
              <form class="col s12">
                <div class="row">
                    <h3 class="text-white">Create new Game</h3>
                    <div class="input-field col s12">
                        <i class="fa fa-share-alt prefix"></i>
                        <input id="niveles" type="text" class="validate white-text">
                        <label for="icon_prefix"># of levels</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="fa fa-neuter prefix"></i>
                        <input id="jugadores" type="text" class="validate white-text">
                        <label for="icon_prefix"># of players</label>
                    </div>
                    <button type="submit" class="waves-effect waves-light btn-large Colordeboton">
                        <span class="fa fa-newspaper-o"></span> Create Game
                    </button>
                </div>
              </form>
          </div>
      </div>
  </div>
  <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/paratodos.js') !!}"></script>
  <script type="text/javascript" src="{!! asset('js/admin_juegos.js') !!}"></script>
</body>
</html>
