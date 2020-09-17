$(document).ready(function()
{
    $('.navbar-nav li a.dropdown-toggle').click(function(e)
    {
        e.preventDefault();
        $(this).parent().toggleClass('open');
    });

    $('[data-toggle="collapse"]').click(function()
    {
        var target = $(this).attr('data-target');
        //$(target).toggleClass('in');
        $(target).removeClass('in');
    });
});

$(document).ready(function() {
    $("#menuBtn").click(function() {
            $('.navbar-collapse').collapse('hide');
    });
});

function actionBoton() {
    $('.navbar-collapse').collapse('show');
}