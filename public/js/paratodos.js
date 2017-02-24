Materialize.fadeInImage('body');
function barra() {
    setInterval(cambiarcolor,10);
    var r=0;var g=0;var b=0;
    function cambiarcolor(){
        r++;
        $('.determinate').css("background-color",'rgb('+r+','+g+','+b+')');
        $('.new.badge').attr("style",'color:rgb('+g+','+r+','+b+');background-color:rgb('+(250-b)+','+(250-g)+','+(250-r)+')');
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
