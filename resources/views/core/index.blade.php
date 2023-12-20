<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>SMK PERSADA</title>
</head>

<body>

    <div class="grid grid-cols-12  ">
        <div class="col-span-3">
            @include('core.sidebar')
        </div>
        <div class="col-span-9">
            @yield('content')
        </div>
    </div>
    <script src="jquery.js"></script>
    <script src="custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('jquery.js') }}"></script>
    <script>
        // pencarian
        $('#pencarian').on('input', () => {
            let search = $('#pencarian').val();
            console.log(search)
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/data-siswa?search=${search}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    const tbody = $('#tbody');
                    const data = response.data;
                    console.log(response)
                    tbody.empty()
                    if (search != "" || search != null || search != empty) {
                        for (const datas of data) {
                            console.log(datas)

                            tbody.append(`
                                            <tr class="text-gray-700">
                                                                        <td class="px-4 py-3 border">
                                                                            <div class="flex items-center text-sm">
                                                                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                                                    <img class="object-cover w-full h-full rounded-full"
                                                                                        src="foto_siswa/${datas.gambar}" alt=""
                                                                                        loading="lazy" />
                                                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                                                        aria-hidden="true"></div>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="font-semibold text-black">${datas.nama_siswa}</p>
                                                                                    <p class="text-xs text-gray-600">${datas.nis}</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="px-4 py-3 text-ms font-semibold border">${datas.kelas}</td>
                                                                        <td class="px-4 py-3 text-ms font-semibold border">${datas.nisn}</td>
                                                                        <td class="px-4 py-3 text-xs border">
                                                                            <span
                                                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                                                ${datas.nama_jurusan}</span>
                                                                        </td>
                                                                        <td class="px-4 py-3 text-sm border">${datas.type_name}</td>
                                                                        <td class="px-4 py-3 text-sm border">
                                                                            <div class="flex justify-center">
                                                                                <form action="/data-siswa/${datas.nis}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"><i
                                                                                            class="fa-solid fa-trash mr-1 text-red-500 hover:text-red-900"></i></button>
                                                                                </form>
                                                                                <a href="/data-siswa/${datas.nis}/edit"
                                                                                    class="btn-update"><i
                                                                                        class="fa-solid
                                                                                    fa-pen ml-1 text-green-500 hover:text-green-900"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                `)
                        }
                    }

                    // end if
                    else {
                        for (const datas of data) {
                            tbody.empty()
                            tbody.append(`
                                            <tr class="text-gray-700">
                                                                        <td class="px-4 py-3 border">
                                                                            <div class="flex items-center text-sm">
                                                                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                                                    <img class="object-cover w-full h-full rounded-full"
                                                                                        src="foto_siswa/${datas.gambar}" alt=""
                                                                                        loading="lazy" />
                                                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                                                        aria-hidden="true"></div>
                                                                                </div>
                                                                                <div>
                                                                                    <p class="font-semibold text-black">${datas.nama_siswa}</p>
                                                                                    <p class="text-xs text-gray-600">${datas.nis}</p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="px-4 py-3 text-ms font-semibold border">${datas.kelas}</td>
                                                                        <td class="px-4 py-3 text-xs border">
                                                                            <span
                                                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                                                nama_jurusan </span>
                                                                        </td>
                                                                        <td class="px-4 py-3 text-sm border">kelas siswa</td>
                                                                        <td class="px-4 py-3 text-sm border">
                                                                            <div class="flex justify-center">
                                                                                <form action="/data-siswa/'${datas . nis}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"><i
                                                                                            class="fa-solid fa-trash mr-1 text-red-500 hover:text-red-900"></i></button>
                                                                                </form>
                                                                                <a href="/data-siswa/${datas . nis}/edit"
                                                                                    class="btn-update"><i
                                                                                        class="fa-solid
                                                                                    fa-pen ml-1 text-green-500 hover:text-green-900"></i></a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                        `)
                        };

                    }
                }
            })
        })


        // pencarian by nis
        $('#search-nis').on('input', () => {
            let search = $('#search-nis').val();
            console.log(search)
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/pembayaran?search=${search}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    const tbody = $('#tbody');
                    const data = response.data;
                    tbody.empty()

                    if (search != "" || search != null || search != empty) {
                        for (const datas of data) {
                            tbody.append(`
                                           <tr class="text-gray-700 text-center">
                                            <td class="px-4 py-3 text-ms border">
                                              ${datas.nama_siswa}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                               ${datas.kelas}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">${datas.nis}</td>
                                            <td class="px-4 py-3 text-ms border">${datas.nisn}</td>
                                            <td class="px-4 py-3 text-ms border">
                                               ${datas.nama_jurusan}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.pembangunan}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.tunggakan}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.spp}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.osis}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.semester_ganjil}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.semester_genap}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.psg}</td>
                                            <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                            <td class="px-4 py-3 text-ms border">${datas.keterangan}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                <div class="flex justify-center">
                                                    <a href="/pembayaran/${datas.id}/edit"><i
                                                            class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                    <form action="/pembayaran/${datas.id}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"> <i
                                                                class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        `)
                        }
                    }

                }
            })
        })

        // jika tombol rekap by tanggal di bagian pembayaran di tekan
        $('#tanggal1, #tanggal2').on("change", () => {
            const tanggal1 = $('#tanggal1').val();
            const tanggal2 = $('#tanggal2').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/pembayaran?tanggal1=${tanggal1}&&tanggal2=${tanggal2}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    const tbody = $('#tbody');
                    const data = response.data;
                    tbody.empty();
                    console.log(data)
                    if (tanggal1 && tanggal2 != null) {
                        for (const datas of data) {
                            tbody.append(`
                                       <tr class="text-gray-700 text-center">
                                        <td class="px-4 py-3 text-ms border">
                                          ${datas.nama_siswa}
                                        </td>
                                        <td class="px-4 py-3 text-ms border">
                                           ${datas.kelas}
                                        </td>
                                        <td class="px-4 py-3 text-ms border">${datas.nis}</td>
                                        <td class="px-4 py-3 text-ms border">${datas.nisn}</td>
                                        <td class="px-4 py-3 text-ms border">
                                           ${datas.nama_jurusan}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.pembangunan}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.tunggakan}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.spp}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.osis}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.semester_ganjil}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.semester_genap}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.psg}</td>
                                        <td class="px-4 py-3 text-ms border">Rp. ${datas.lab}</td>
                                        <td class="px-4 py-3 text-ms border">${datas.keterangan}</td>
                                        <td class="px-4 py-3 text-ms border">
                                            <div class="flex justify-center">
                                                <a href="/pembayaran/${datas.id}/edit"><i
                                                        class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                <form action="/pembayaran/${datas.id}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"> <i
                                                            class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    `)
                        }
                    }
                }
            })
        })
    </script>


</body>

</html>
