function volumeToggle(button) {
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-mute");
    $(button).find("i").toggleClass("fa-volume-up");
}

function previewEnded() {
    $(".previewVideo").toggle(); // Toggles the hidden/nonhidden property of the element.
    $(".previewImage").toggle();
}

function goBack() {
    window.history.back();
}