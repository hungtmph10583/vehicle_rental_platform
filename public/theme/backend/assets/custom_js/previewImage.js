$(function () {
    // =========================
    // PREVIEW MAIN IMAGE
    // =========================
    const uploadImage = $('#uploadImage');
    const preImage = $('#preImage');
    preImage.on('click', () => uploadImage.trigger('click'));

    uploadImage.on('change', function (e) {
        const file = e.target.files?.[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = e => preImage.attr('src', e.target.result);
        reader.readAsDataURL(file);
    });
});