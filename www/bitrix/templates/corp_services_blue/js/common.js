$(document).ready(function () {

    $("[data-toggle]").click(function () {
        var toggle_el = $(this).data("toggle");
        $(toggle_el).toggleClass("open-sidebar");
    });

    $('.slider2').mobilyslider({
        transition: 'vertical',
        animationSpeed: 500,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
        bullets: false
    });
/*

    $('#zvonok-button, #konsultac-button,.click-event').on('click', function (e) {
        e.preventDefault();
        $('#zakaz-form').bPopup({
            positionStyle: 'fixed',
            position: ['25%','30%']
        }
        );

    });
*/

});

function displ(d1) {
    document.getElementById('dv').style.display = 'none'
    document.getElementById('hod').style.display = 'none'
    document.getElementById('kpp').style.display = 'none'
    document.getElementById('elk').style.display = 'none'
    document.getElementById('kuz').style.display = 'none'
    document.getElementById('dia').style.display = 'none'
    document.getElementById('teh').style.display = 'none'
    document.getElementById(d1).style.display = 'block'
}