<!DOCTYPE html>
<html >
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
  <div class="fondo">
		<div class="cuerpo">
      <div class="valign-wrapper">
        <div class="center-align">
          <img src={!! asset('Imagenes/logo.png') !!}  class="responsive-img logo"  alt="Logo de Gorod"/>
          <br>
          <div class="cuerpo2">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                    <i class="fa fa-user prefix"></i>
                    <input id="icon_prefix" type="text" class="validate white-text">
                    <label for="icon_prefix">User</label>
                </div>
              </div>
            </form>
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                    <i class="fa fa-key prefix"></i>
                    <input id="icon_prefix" type="text" class="validate white-text">
                    <label for="icon_prefix">Password</label>
                </div>
              </div>
            </form>
            <br>
      			<button class="waves-effect waves-light btn Colordeboton btn-large"><span class= "fa fa-bomb"></span> Start</button>
          </div>
        </div>
      </div>
		</div>
	</div>
  <script type={!! asset('text/javascript') !!} src={!! asset('js/jquery.min.js') !!}></script>
  <script src={!! asset('js/materialize.min.js') !!}></script>
</body>
</html>
