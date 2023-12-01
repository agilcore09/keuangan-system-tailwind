$("#tombol-add").on("click", function (event) {
    event.preventDefault();
    $('.display-add').fadeIn("slow");
});

$('#button-cancel').on('click', function () {
    $('.display-add').fadeOut("slow");
})