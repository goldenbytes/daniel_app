function progreso_jugadores(){
    //$('#jugadores_jugador').html();
    var parametro_url = window.location.hash;
    parametro_url   =   parametro_url.replace("#", "");
    console.log(parametro_url);
    if (parametro_url != "" && parametro_url>0){
        var ingresado=parseInt(parametro_url);
        $.ajax({
            type:"GET",
            url:'../api/jugadores/'+ingresado,
            success: function(datos){
                var texto='';
                $.each(datos[0].datos, function (numero,valor) {
                    texto+='<li> <div class="collapsible-header black-text left-align"><span class="new badge" data-badge-caption="%">4</span><span class="material-icons"> <img src="Iconos/pirata.png" width="36px" alt="" class="responsive-img"></span> '+valor.nombre+'</div><div class="collapsible-body"> <div class="progress grey"> <div class="determinate" style="width: 70%;background-color:rgb(250,0,0)"></div></div></div></li>';
                });
                $('#jugadores_jugador').html(texto);

            },
            error: function(error){
                $('#jugadores_jugador').html('<div class="collection-item"><h1 class="red-text">Error</h1></div>');
            }
        });
    }else{
        Materialize.toast('No access 😢', 4000);
    }


}