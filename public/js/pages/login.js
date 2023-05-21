$(document).ready(function () {
    $(".login_form").submit(function () {
        $('button[type="submit"]').prop("disabled", true);
        $(".spinner").show();
    });
});
