$(document).ready(function () {
    $(".register_form").submit(function (e) {
        $('button[type="submit"]').prop("disabled", true);
        $(".spinner").show();
    });
});
