$(document).ready(function () {
    function back() {
        let url = "/";

        if (
            sessionStorage.getItem("pagina-anterior") &&
            sessionStorage.getItem("pagina-anterior") !== window.location.href
        ) {
            url = sessionStorage.getItem("pagina-anterior");
        }

        window.location.replace(url);
    }
    $(".header_back-button").click(back);

    window.addEventListener("scroll", () => {
        if (window.pageYOffset < 15 && $(".header").hasClass("active")) {
            $(".header").removeClass("active");
            return;
        }
        if (window.pageYOffset > 15 && !$(".header").hasClass("active")) {
            $(".header").addClass("active");
        }
    });
});
