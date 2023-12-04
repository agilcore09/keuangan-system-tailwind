

$("#tombol-add").on("click", function (event) {
    event.preventDefault();
    $('.display-add').fadeIn("slow");
});

$('#button-cancel').on('click', function () {
    $('.display-add').fadeOut("slow");
})

$("#form-add").on("submit", function (e) {
    e.preventDefault();
    let gambar = $('#gambar').val();
    let namaSiswa = $('#nama_siswa').val();
    let nis = $('#nis').val();
    let kelas = $('#kelas').val();
    let categoryId = $('#category_id').val();
    let typeId = $('#type_id').val();
    let token = $("meta[name='csrf-token']").attr("content");
    console.log(gambar)
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        // data: {
        //     "gambar": gambar,
        //     "nama_siswa": namaSiswa,
        //     "nis": nis,
        //     "kelas": kelas,
        //     "category_id": categoryId,
        //     "type_id": typeId,
        //     "_token": token
        // },
        data: new FormData(this),
        url: '/data-siswa',
        type: 'POST',
        contentType: false,
        processData: false,
        success: function (response) {
            console.log("success")
        }, error: function (data) {
            var errors = data.responseJSON;
            console.log(errors);
        }
    })
})