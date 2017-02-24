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
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                  <i class="fa fa-user prefix"></i>
                  <input id="icon_prefix" type="text" class="validate">
                  <label for="icon_prefix">Type the keyword...!!!</label>
              </div>
              <button class="waves-effect waves-light btn-large Colordeboton">Accept</button>
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
  	</div>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
    <script type="text/javascript">
    barra();
      function barra() {
        setInterval(cambiarcolor,1);
        var r=0;var g=0;var b=0;
      function cambiarcolor(){
        r++;
        $('.determinate').attr("style",'width: 70%;background-color:rgb('+r+','+g+','+b+')');
        $('.new.badge').attr("style",'color:rgb('+g+','+r+','+b+');background-color:rgb('+b+','+g+','+r+')');
        console.log('rgb('+r+','+g+','+b+')');
        if (r%2==0) {
          g++;
        }
        if (g%3==0) {
          b++;
        }
        if (r==250) {
          r=0;
        }
        if (g==250) {
          g=0;
        }
        if (b==250) {
          b=0;
        }
      }
      }
    </script>
  </body>
</html>
