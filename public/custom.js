$("#tombol-add").on("click", function (event) {
    event.preventDefault();
    $('.display-table').fadeOut(300, () => {
        $(this).remove()
    });
});