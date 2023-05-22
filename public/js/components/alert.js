$(document).ready(function () {
    setTimeout(() => {
        $(".native-alert").addClass("out");
        setTimeout(() => {
            $(".native-alert").hide();
        }, 500);
    }, 500 + 2000);
});
