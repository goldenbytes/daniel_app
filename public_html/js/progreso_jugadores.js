function progreso_jugadores(){
    //$('#jugadores_jugador').html();
    var parametro_url = window.location.hash;
    parametro_url   =   parametro_url.replace("#", "");
    console.log(parametro_url);
    if (parametro_url != "" && parametro_url>0){
        $('#jugadores_jugador').html('<div class="preloader-wrapper active"> <div class="spinner-layer spinner-red-only"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div>');
        api_consulta();
        setInterval(api_consulta,30000);
        function api_consulta(){
            var ingresado=parseInt(parametro_url);
            $.ajax({
                type:"GET",
                url:'../api/jugadores/'+ingresado,
                success: function(datos){
                    var texto='';
                    $.each(datos.datos, function (numero,valor) {
                        por =(valor.nivel*100)/valor.nivel_max;
                        foto='../../Iconos/barco.png';
                        if(valor.estado)
                            foto='../../Iconos/pirata.png';
                        if(por!=100)
                            texto+='<li> <div class="collapsible-header black-text left-align"><span class="new badge" data-badge-caption="%">'+por+'</span><span class="material-icons"> <img src="'+foto+'" width="36px" alt="" class="responsive-img"></span> '+valor.nombre+'<span class="badge grey">Lvl '+valor.nivel+'</span></div><div class="collapsible-body"> <div class="progress grey"> <div class="determinate" style="width:'+por+'%;background-color:rgb(250,0,0)"></div></div></div></li>';
                        else
                            texto+='<li> <div class="collapsible-header black-text left-align"><span class="new badge" data-badge-caption="%">'+por+'</span><span class="material-icons"> <img src="../../Iconos/cofre_0.png"  onmouseover=\'this.src="../../Iconos/cofre_1.png";\' onmouseout=\'this.src="../../Iconos/cofre_0.png";\' width="36px" class="responsive-img"></span> '+valor.nombre+'  (Winner)<span class="badge grey">Lvl '+valor.nivel+'</span></div><div class="collapsible-body"> <div class="progress grey"> <div class="determinate" style="width:'+por+'%;background-color:rgb(250,0,0)"></div></div></div></li>';

                    });
                    $('#jugadores_jugador').html(texto);

                },
                error: function(error){
                    console.log(error);
                    $('#jugadores_jugador').html('<div class="collection-item"><h1 class="red-text">Error</h1></div>');
                }
            });
        }
    }else{
        Materialize.toast('No access 😢', 4000);
    }
}
$("form").submit(function( event ) {
    palabras();
    event.preventDefault();
});
function palabras(){
    var parametro_url = window.location.hash;
    const jugador   =   parametro_url.replace("#", "");
    const ingresado =   $('#palabra').val();
    $('#palabra').val('');
    if(ingresado!=''){
        $.ajax({
            type:"POST",
            url:'../api/palabras',
            data:{'palabra':ingresado,'id_jugador':jugador},
            success: function(datos){
                    Materialize.toast(datos.mensaje, 4000);
            },
            error: function(error){
                $('#response').html('<div class="collection-item"><h1 class="red-text">Not  found</h1></div>');
            }
        });
    }else{
        Materialize.toast('Enter a word 🙄', 4000);
    }
}