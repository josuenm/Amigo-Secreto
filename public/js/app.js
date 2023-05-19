window.addEventListener("beforeunload", () => {
    sessionStorage.setItem("pagina-anterior", window.location.href);
});
