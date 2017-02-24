$( document ).ready(function() {
    verificar();
    $("form").submit(function( event ) {
        enviar();
        event.preventDefault();
    });
});
function verificar(){
    $('#cargador').html('<div class="preloader-wrapper active"> <div class="spinner-layer spinner-red-only"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div>');
    $.ajax({
        type:"GET",
        url:'./api/juegos',
        success: function(datos){
            var disponibles = datos.datos[0].jugadores;
            var inscritos   = datos.datos[0].inscritos;
            puede =disponibles-inscritos;
            console.log(puede);
            if(datos.datos && puede>0){
                $('#cargador').html('<p class="yellow-text">Game of '+datos.datos[0].name+' created '+datos.datos[0].creacion+'</p>');
                $('#juego').val(datos.datos[0].juego);
                Materialize.toast('Put your name ☺️️', 2000);
            }else{
                $('#cargador').html('<p class="red-text">Game not found</p>');
                window.location.href = './nogame';
            }
        },
        error: function(error){
            window.location.href = './';
        }
    });
}
function enviar(){
    const ingresado =   $('#name').val();
    $('#name').val('');
    if(ingresado!=''){
        $('#cargador').html('<div class="preloader-wrapper active"> <div class="spinner-layer spinner-red-only"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div>');
        $.ajax({
            type:"POST",
            url:'./api/jugadores',
            data:{'nombre':ingresado},
            success: function(datos){
                console.log(datos.datos);
                if(datos.datos){
                    $('#cargador').html('<p class="green-text">'+datos.mensaje+'</p>');
                    window.location.href = 'players/levels#'+datos.datos;
                }else{
                    $('#cargador').html('<p class="red-text">'+datos.mensaje+'</p>');
                    window.location.href = './';
                }
            },
            error: function(error){
                window.location.href = './';
            }
        });
    }else{
        Materialize.toast('Enter u name 🙄', 4000);
    }

}