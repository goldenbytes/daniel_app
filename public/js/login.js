$("form").submit(function( event ) {
    autenticacion();
    event.preventDefault();
});
function autenticacion(){
    const usuario    =   $('#usuario').val();
    const contrasena =   $('#contra').val();
    $('#usuario').val('');
    $('#contra').val('');
    if(usuario !='' && contrasena!=''){
        $.ajax({
            type:"POST",
            url:'../api/login',
            data:{'email':usuario,'password':contrasena},
            success: function(datos){
                Materialize.toast(datos.mensaje, 6000);
                console.log(datos.mensaje);
                if(datos.session){
                    window.location.href = './admin/new#'+datos.id;
                }
            },
            error: function(error){
                Materialize.toast(error, 4000);
            }
        });
    }else{
        Materialize.toast('Enter credentials  🙄', 4000);
    }
}