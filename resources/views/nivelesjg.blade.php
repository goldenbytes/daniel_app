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
                  <i class="fa fa-user prefix"></i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Type the keyword...!!!</label>
              </div>
              <button type="button" class="waves-effect waves-light btn-large Colordeboton">
                Accept
              </button>
            </div>
          </form>

            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header black-text left-align"><span class="new badge" data-badge-caption="%">4</span><span class="material-icons"> <img src="{!! asset('Iconos/pirata.png') !!}" width="36px" alt="" class="responsive-img"></span> Yo mero</div>
                <div class="collapsible-body">
                    <div class="progress grey">
                        <div class="determinate" style="width: 70%;background-color:rgb(250,0,0)"></div>
                    </div>
                </div>
              </li>
              <li>
                <div class="collapsible-header black-text left-align"><span class="new badge" data-badge-caption="%">40</span><span class="material-icons"> <img src="{!! asset('Iconos/barco.png') !!}" width="36px" alt="" class="responsive-img"></span> Otro baboso</div>
                <div class="collapsible-body">
                  <div class="progress">
                      <div class="determinate" style="width: 70%; color:red"></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
  		</div>
      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red" href="./pronunciation">
          <i class="fa fa-microphone"></i>
        </a>
      </div>
  	</div>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/paratodos.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/progreso_jugadores.js') !!}"></script>
    <script type="text/javascript">
      barra();
    </script>
  </body>
</html>
