$(document).ready(function () {
    $(".handle-person_form").submit(function () {
        $('button[type="submit"]').prop("disabled", true);
        $(".spinner").show();
    });
});
