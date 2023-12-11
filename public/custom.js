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


$('#update-cancel').on('click', function () {
    $('.display-update').fadeOut("slow");
})


// add page
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
            Swal.fire({
                title: 'Sukses',
                text: 'Berhasil Menambah Data',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        }, error: function (data) {
            var errors = data.responseJSON;
            console.log(errors);
        }
    })
})

