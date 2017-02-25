$("form").submit(function( event ) {
    crear_juego();
    event.preventDefault();
});
function crear_juego(){
    const niveles    =  parseInt($('#niveles').val());
    const jugadores  =  parseInt($('#jugadores').val());
    $('#niveles').val('');
    $('#jugadores').val('');
    var parametro_url = window.location.hash;
    usuario   =   parametro_url.replace("#", "");
    if(usuario>0){
        if(niveles>1 && jugadores>1){
            $.ajax({
                type:"POST",
                url:'../api/juegos',
                data:{'id_usuario':usuario,'niveles':niveles,'jugadores':jugadores},
                success: function(datos){
                    Materialize.toast(datos.mensaje, 4000);
                    if(datos.datos){
                        window.location.href = './players#'+usuario;
                    }
                },
                error: function(error){
                    Materialize.toast(error, 4000);
                }
            });
        }else{
            Materialize.toast('Only numbers', 4000);
        }
    }else{
        Materialize.toast('Login pls', 4000);
    }
}