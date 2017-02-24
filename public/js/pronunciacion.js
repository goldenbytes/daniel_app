$( document ).ready(function() {
    $( "form" ).submit(function( event ) {
        consultar();
        event.preventDefault();
    });
});
function consultar(){
    const ingresado =   $('input').val();
    $('input').val('');
    if(ingresado!=''){
        $('#response').html('<div class="preloader-wrapper active"> <div class="spinner-layer spinner-red-only"> <div class="circle-clipper left"> <div class="circle"></div></div><div class="gap-patch"> <div class="circle"></div></div><div class="circle-clipper right"> <div class="circle"></div></div></div></div>');
        $.ajax({
            type:"GET",
            url:'../api/pronunciacion/'+ingresado,
            success: function(datos){

                var texto='';
                $.each(datos[0].lexicalEntries, function (numero,valor) {
                    archivo ="'"+valor.pronunciations[0].audioFile+"'";
                    texto+='<a href="#" class="collection-item" onclick="reproducir('+archivo+')">'+valor.text+' ('+valor.lexicalCategory+')</a>';
                });
                $('#response').html(texto);
                Materialize.toast('Touch in a word to play 🤞', 1000);

            },
            error: function(error){
                $('#response').html('<div class="collection-item"><h1 class="red-text">Not  found</h1></div>');
            }
        });
    }else{
        Materialize.toast('Enter a word 🙄', 4000);
    }
}
function reproducir(archivo){
    var sonido  =   document.createElement('audio');
    sonido.setAttribute('src',archivo);
    $.get();
    sonido.play();
}