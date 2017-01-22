$(document).ready(function () {

    var operatie = 0;

    $(".numberFields input").click(function () {
        var nr = $("#nr").val();
        $("#nr").val(nr + $(this).val());

        operatie = 0;
    });

    $(".operations input").click(function () {
        var nr = $("#nr").val();
        
        if (operatie !== 0 && variable !== null)
            nr = nr.substring(0, nr.length - 3);

        operatie = $(this).val();
        $("#nr").val(nr + " " + operatie + " ");
    });

    $("#C").click(function () {
        $("#nr").val("");

        operatie = 0;
    });

    $("#back").click(function () {
        var nr = $("#nr").val();
        nr = nr.substring(0, nr.length - 1);
        $("#nr").val(nr);

        operatie = 0;
    });
    
});