$(document).ready(function () {
    function closeNativeModal() {
        $("#native-modal").hide();
    }

    $("#native-modal_background").click(closeNativeModal);
    $("#native-modal_close").click(closeNativeModal);
});
