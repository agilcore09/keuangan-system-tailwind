// window loading screen
$(window).on("load", function () {
    $('.table').hide();
    setInterval(() => {
        $('.loading').hide();
        $('.table').fadeIn("slow");
    }, 1000);
});





// create data action panel
$("#tombol-add").on("click", function (event) {
    event.preventDefault();
    $('.display-add').fadeIn("slow");
});

$('#button-cancel').on('click', function () {
    $('.display-add').fadeOut("slow");
})

$("#form-add").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: new FormData(this),
        url: '/data-siswa',
        type: 'POST',
        contentType: false,
        processData: false,
        success: function (response) {
            $('#form-add')[0].reset();
            $('.display-add').fadeOut("slow");
            location.reload();
        }, error: function (data) {
            var errors = data.responseJSON;
            console.log(errors);
        }
    })
})