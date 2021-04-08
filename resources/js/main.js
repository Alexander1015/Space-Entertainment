//Cargamos los componentes cuando la página ya este cargada
$(document).ready(function () {
    //Ancho y alto de la ventana del usuario
    var ancho = $(window).width();
    var alto = $(window).height();
    //Loader
    $(".container_Loader").css({
        "opacity": 0,
        "visibility": "hidden"
    });
    //Para cambiar el nav al scrollear
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        //console.log(scrollTop);
        var nwscrollTop = (scrollTop / alto) * 100;
        //console.log(nwscrollTop);
        if(ancho > 720) {
            if(nwscrollTop > 70) {
                $("#navsup").css({
                    "background": "#121034",
                    "border-bottom": "1px #fdfdfd solid",
                    "height": "5.1em"
                });
            }
            if(nwscrollTop <= 70) {
                $("#navsup").css({
                    "background": "",
                    "border-bottom": "",
                    "height": "5em"
                });
            }
        }
        else {
            if(nwscrollTop > 40) {
                $("#navsup").css({
                    "background": "#121034",
                    "border-bottom": "1px #fdfdfd solid",
                    "height": "5.1em"
                });
            }
            if(nwscrollTop <= 40) {
                $("#navsup").css({
                    "background": "",
                    "border-bottom": "",
                    "height": "5em"
                });
            }
        }
    })
});
