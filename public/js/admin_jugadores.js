progreso_jugadores();
$('.modal').modal();
function progreso_jugadores(){
    $('#lista_jugadores').html('<div class="preloader-wrapper active"> <div class="spinner-layer spinner-red-only"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div>');
    api_jugador();
    setInterval(api_jugador,3000);
}
function api_jugador(){
    $.ajax({
        type:"GET",
        url:'../api/palabras',
        success: function(datos){
            var texto='<ul class="collection">';
            var nombre=datos.datos.jugadores[0].jugador;
            var palabra='';
            var nivel=0;
            $.each(datos.datos.jugadores, function (numero,valor) {
                foto='../../Iconos/pirata.png';
                palabra+=valor.palabra+', ';

                if(valor.jugador!=nombre) {
                    texto += '<a class="collection-item avatar"> <img src="' + foto + '" class="circle"><span class="title black-text left-aling">'+nombre+'</span> <p>Level #'+nivel+'<br></p><a href="#!" class="secondary-content"></a> </a>';
                    palabra='';
                    nombre=valor.jugador;
                }
                nivel=valor.nivel;
            });
            texto += '<a class="collection-item avatar"> <img src="' + foto + '" class="circle"><span class="title black-text left-aling">'+nombre+'</span> <p>Level #'+nivel+'<br></p><a href="#!" class="secondary-content"></a> </a>';
            $('#lista_jugadores').html('</ul>'+texto);

            var libres='';
            $.each(datos.datos.palabras, function (numero,valor) {
                if(valor.usada===0)
                    libres+='<li>'+valor.titulo_pal+'</li>';
            });
            $('#texto_palabras').html(libres);


        },
        error: function(error){
            console.log(error);
            $('#lista_jugadores').html('<div class="collection-item"><h1 class="red-text">Error</h1></div>');
        }
    });

}
function abrirmodal(){
    $('#freewords').modal('open');
}