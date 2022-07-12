$(document).ready(function () {
    $(".dropdown-button").dropdown();
    $("#travelItinery").modal();
    $("#itineryFormModal").modal();
});
$(document).ready(function () {
    var menuStatus = true;
    $('.modal').modal();
    $('.modal-trigger').modal();
    $('#toogle-navigation-1').click(function () {
        $('.navigation1').toggle();
    });
});
var tqdb;
$(document).ready(function () {
    $(".push-nav-control-btn").on('click', function () {
        $(".push-nav-wrapper").toggle();
    });
});

