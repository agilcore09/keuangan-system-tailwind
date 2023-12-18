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

// create pembayaran
$("#btn-add-pembayaran").on("click", function (event) {
    event.preventDefault();
    $('.display-add').fadeIn("slow");
    $('.table-pembayaran').hide();
});


$('#button-cancel').on('click', function () {
    $('.display-add').fadeOut("slow");
})

$('#button-cancel-pembayaran').on('click', function () {
    $('.display-add').hide("slow");
    $('.table-pembayaran').fadeIn("slow");
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
            window.location.reload()
        }, error: function (data) {

            let errors = data.responseJSON;
            if (errors) {
                $('.error-page').append(`
                    <div class="flex bg-red-100 rounded-lg p-3 mb-4 text-sm text-red-700" role="alert">
                            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <span class="font-medium">Danger alert!</span> Lengkapi Form Kosong, ada data yang duplikat .
                            </div>
                        </div>
                `)
            }
            console.log(errors)
            Swal.fire({
                title: 'Gagal',
                text: "Ada Inputan Error",
                icon: 'error',
                confirmButtonText: 'Confirm'
            })
        }
    })
})

$('.closealertbutton').click(function () {
    $('#alertbox').hide(1000);
})
