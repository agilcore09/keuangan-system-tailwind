// window loading screen
$(window).on("load", function () {
    $('.table').hide();
    setInterval(() => {
        $('.loading').hide();
        $('.table').fadeIn("slow");
    }, 1000);
});

// close alert button
$(".closealertbutton").click(function (e) {
    pid = $(this).parent().parent().hide(500)
})

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
                confirmButtonText: 'Confirm'
            })
        }, error: function (data) {

            let errors = data.responseJSON;
            let errorGambar = errors.gambar[0];
            if (errorGambar) {
                $('.gambar').addClass('border-red-500')
            }
            console.log(errors.gambar[0])

            Swal.fire({
                title: 'Gagal',
                text: "Ada Inputan Error",
                icon: 'error',
                confirmButtonText: 'Confirm'
            })
        }
    })
})

