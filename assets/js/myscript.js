
// BOUTON TOGGLE DE LA SIDEBAR
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    $('#sidebar ul li').on('click', function () {
        $('#sidebar ul .active').removeClass('active');
       $(this).addClass('active');
   });

});

//FIN BOUTON TOGGLE
