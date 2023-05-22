$(document).ready(function () {
    $(".search-people_form").submit(function () {
        $('.search-people_form button[type="submit"]').prop("disabled", true);
        $(".search-people_form .spinner").show();
    });

    $(".giveway_form").submit(function () {
        $('.giveway_form button[type="submit"]').prop("disabled", true);
        $(".giveway_form .spinner").show();
    });
});
