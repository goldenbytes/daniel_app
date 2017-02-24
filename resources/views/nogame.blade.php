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
  <div class="fondo4">
		<div class="cuerpo">
      <div class="valign-wrapper">
        <div class="center-align">
              <h3>So sorry!</h3>
              <h5 class="light">Too many players on the game, come back in a while.</h5>
        </div>
      </div>
		</div>
	</div>
  <script type='text/javascript' src={!! asset('js/jquery.min.js') !!}></script>
  <script type='text/javascript' src={!! asset('js/materialize.min.js') !!}></script>
  <script type="text/javascript" src="{!! asset('js/paratodos.js') !!}"></script>
  <script type='text/javascript'>
      barra();
        function barra() {
          setInterval(cambiarcolor,1);
          var r=0;var g=0;var b=0;
            function cambiarcolor(){
              r++;
              $('h3').attr("style",'color:rgb('+g+','+r+','+b+')');
              $('h5').attr("style",'color:rgb('+b+','+g+','+b+')');
              console.log('rgb('+r+','+g+','+b+')');
              if (r%2==0)
                g++;
              if (g%3==0)
                b++;
              if (r==250)
                r=0;
              if (g==250)
                g=0;
              if (b==250)
                b=0;
            }
        }
  </script>
</body>
</html>
