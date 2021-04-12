//Cargamos los componentes cuando la página ya este cargada
$(document).on("DOMContentLoaded", function () {
    //Loader
    $(".container_Loader").css({
        opacity: 0,
        visibility: "hidden",
    });
});

$(function () {
    //Ancho y alto de la ventana del usuario
    var ancho = $(window).width();
    var alto = $(window).height();
    //Para cambiar el nav al scrollear
    $(window).on("scroll", function () {
        var scrollTop = $(window).scrollTop();
        //console.log(scrollTop);
        var nwscrollTop = (scrollTop / alto) * 100;
        //console.log(nwscrollTop);
        if (ancho > 720) {
            if (nwscrollTop > 70) {
                $("#navsup").css({
                    background: "#142e49",
                    "border-bottom": "1px #fdfdfd solid",
                    height: "5.1em",
                });
            }
            if (nwscrollTop <= 70) {
                $("#navsup").css({
                    background: "",
                    "border-bottom": "",
                    height: "5em",
                });
            }
        } else if (ancho <= 720 && ancho >= 480) {
            if (nwscrollTop > 20) {
                $("#navsup").css({
                    background: "#142e49",
                    "border-bottom": "1px #fdfdfd solid",
                    height: "5.1em",
                });
            }
            if (nwscrollTop <= 20) {
                $("#navsup").css({
                    background: "",
                    "border-bottom": "",
                    height: "5em",
                });
            }
        }
    });
    //Para el menú lateral
    $(".menu li:has(ul)").on("click", function (e) {
        e.preventDefault();
        if ($(this).hasClass("activado")) {
            $(this).removeClass("activado");
            $(this).children("ul").slideUp();
        } else {
            $(".menu li ul").slideUp();
            $(".menu li").removeClass("activado");
            $(this).addClass("activado");
            $(this).children("ul").slideDown();
        }
    });
    $(".btnmenu").on("click", function (e) {
        e.preventDefault();
        $("#navlat .menu").slideToggle();
    });
    $(window).on("resize", function () {
        if (ancho > 480) {
            $("#navlat .menu").css({
                display: "block",
            });
        } else {
            $("#navlat .menu").css({
                display: "none",
            });
            $(".menu li ul").slideUp();
            $(".menu li").removeClass("activado");
        }
    });
    $(".menu li ul li a").on("click", function () {
        window.location.href = $(this).attr("href");
    });
    $(".btnmenuhor").on("click", function (e) {
        e.preventDefault();
        if ($(".menu").hasClass("desplazado")) {
            $(".menu").removeClass("desplazado");
            $(".menu").css({
                "margin-right": "3em",
            });
            $("#navlat").css({
                "margin-left": "-17em",
            });
        } else {
            $(".menu").addClass("desplazado");
            $(".menu").css({
                "margin-right": "0em",
            });
            $("#navlat").css({
                "margin-left": "0em",
            });
        }
    });
});
