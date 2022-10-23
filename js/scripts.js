import scrollTopButton from "./btn-scroll.js";

   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
   
   window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});


scrollTopButton(".scroll-top-btn");
scrollTopButton(".scroll-top-btn2");
$(function(){
    'use strict';
   
    $('#btn-1,#btn-2,#btn-3').on('click', function () {
        $('#p-hidden,#p-hidden2,#p-hidden3').toggle()
    });

    $('#ico1').on('mouseenter', function () {
        $('#ico1 p').show();
    });

    $('#ico2').on('mouseenter', function () {
        $('#ico2 p').show();
    });
    $('#ico3').on('mouseenter', function () {
        $('#ico3 p').show();
    });
    $('#ico4').on('mouseenter', function () {
        $('#ico4 p').show();
    });
    $('#ico5').on('mouseenter', function () {
        $('#ico5 p').show();
    });
    $('#ico6').on('mouseenter', function () {
        $('#ico6 p').show();
    });

    $('.icono').on('mouseleave', function () {
        $('p.pleermas').hide();
    });

    
});