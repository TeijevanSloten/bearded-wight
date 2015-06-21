$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: 'receivemsg.php',
            type: 'POST',
            dataType: 'html',
            data: $('form').serialize(),
            beforeSend: function () {
//                $("form :input").attr("disabled", true);
            },
            success: function (data) {
                $("form :input").attr("disabled", false);
                $(".btn.btn-lg.col-md-3.pull-right.btn-warning").html("Submit");
                $(".alert.alert-success.alert-dismissible.col-md-12").slideDown("slow");
                $('form').trigger("reset");
            },
            error: function (e) {
                $("form :input").attr("disabled", false);
            }
        });
    });
});