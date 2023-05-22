$(document).ready(function () {
    $(".person-card_delete-button").click(function (e) {
        $("#native-modal").show();
        $("#native-modal_title").html("Deletar pessoa");
        $("#native-modal_description").html(
            "Essa ação não poderá ser revertida, pense bem antes de deletar essa pessoa"
        );
        $("#native-modal_action").html("Deletar");
        $("#native-modal_form").attr("action", e.target.dataset.url);
        $('#native-modal_form input[name="_method"]').val("DELETE");
        $("#native-modal_form").submit(function () {
            $('button[type="submit"]').prop("disabled", true);
            $(".spinner").show();
        });
    });
});
