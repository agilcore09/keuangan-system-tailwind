@extends('core.index')
@section('content')
    {{-- header --}}
    <div class="container">
        <div class="mt-14 px-5">
            <nav class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">
                        <nav aria-label="breadcrumb" class="w-max">
                            <ol
                                class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                <li
                                    class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                    <a href="#">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                            dashboard</p>
                                    </a>
                                    <span
                                        class="text-gray-500 text-sm antialiased font-sans font-normal leading-normal mx-2 pointer-events-none select-none">/</span>
                                </li>
                                <li
                                    class="flex items-center text-blue-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-blue-500">
                                    <p
                                        class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">
                                        Kelola Peminjaman</p>
                                </li>
                            </ol>
                        </nav>
                        <h6
                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                            Peminjaman</h6>
                    </div>

                </div>
            </nav>
        </div>
    </div>

    {{-- end header --}}
    @if (session()->has('success'))
        <div class="container error error-click mt-5" id="alertbox">
            <div class="container bg-green-500 flex items-center text-white text-sm font-bold px-4 py-3 relative"
                role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                </svg>
                <p>{{ session()->get('success') }}</p>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 closealertbutton">
                    <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
    @endif
    {{-- dashboard table view --}}
    <div class="container mt-9 display-table">
        <div class="px-6 grid grid-cols-10">
            {{-- button wrap --}}
            <div class="buton-wrap col-span-5 pt-2 flex">
                <div>
                    <form action="" class="ml-3 mx-auto flex">
                        <div class="mr-1">
                            <input type="date" id="tanggals1" name="tanggals1"
                                class="w-full px-4 py-2 border border-gray-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">
                        </div>
                        <div class="ml-1">
                            <input type="date" id="tanggals2" name="tanggals2"
                                class="w-full px-4 py-2 border border-gray-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">

                        </div>
                    </form>
                </div>
            </div>
            {{-- end button wrap --}}

            {{-- search section --}}
            <div class="search-wrap col-span-5 flex justify-end">
                <div>
                    <div class="pt-2 relative mx-auto text-gray-900">
                        <input
                            class="border-2 border-gray-900 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search-nis" name="peminjam" placeholder="Cari Nama Peminjam" autocomplete="off"
                            id="peminjam">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="text-gray-900 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            {{-- end section --}}
        </div>




        {{-- table section --}}
        <div class="container table-pembayaran">
            {{-- on card table section --}}
            <div class="table-section">
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto overflow-y-scroll h-screen">
                            {{-- loading section --}}
                            <div class="h-full bg-white loading">
                                <div class="flex justify-center items-center h-full">
                                    <img class="h-16 w-16"
                                        src="https://icons8.com/preloaders/preloaders/1488/Iphone-spinner-2.gif"
                                        alt="">
                                </div>
                            </div>

                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            @endif
                            {{-- end loading section --}}
                            <table class="w-full table pembayaran">
                                <thead class="sticky top-0">
                                    <tr
                                        class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-20 py-3">Nama Lengkap</th>
                                        <th class="px-20 py-3">Kelas</th>
                                        <th class="px-20 py-3">Nama Barang</th>
                                        <th class="px-20 py-3">Kode Barang</th>
                                        <th class="px-20 py-3">Keperluan</th>
                                        <th class="px-20 py-3">Tanggal Peminjaman</th>
                                        <th class="px-20 py-3">Status</th>
                                        <th class="px-20 py-3">Tanggal Pengembalian</th>
                                        {{-- <th class="px-20 py-3">Action</th> --}}
                                    </tr>
                                </thead>

                                <tbody class="bg-white" id="tbody">
                                    @foreach ($data as $item)
                                        <tr class="text-gray-700 text-center">
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->nama_lengkap }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->kelas }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->nama_barang }}
                                            </td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->kode_barang }}</td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->keperluan }}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->tanggal_peminjaman }}</td>
                                            <td class="px-4 py-3 text-ms border">
                                                {{ $item->status }}</td>
                                            <td class="px-4 py-3 text-ms border">{{ $item->updated_at }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if (
                            (request()->tanggal1 == null && request()->tanggal2 == null) ||
                                request()->tanggal1 == null ||
                                request->tanggal2 == null)
                            <div class="container my-5 px-5">
                                {{ $data->links() }}
                            </div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </div>



@endsection

@section('scripts')
    <script>
        // cari nama peminjaman
        $('#peminjam').on('input', () => {
            let search = $('#peminjam').val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/kelola-peminjaman?peminjam=${search}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {

                    const tbody = $('#tbody');
                    const data = response.data;
                    console.log(data);
                    tbody.empty()

                    if (search != "" || search != null || search != empty) {
                        for (const datas of data) {
                            tbody.append(`
                            <tr class="text-gray-700 text-center"> 
                        <td class="px-4 py-3 text-ms border">
                                             ${datas.nama_lengkap}
                                        </td>
                                        <td class="px-4 py-3 text-ms border">
                                           ${datas.kelas }
                                        </td>
                                        <td class="px-4 py-3 text-ms border">
                                           ${datas.nama_barang }
                                        </td>
                                        <td class="px-4 py-3 text-ms border"> ${datas.kode_barang }</td>
                                        <td class="px-4 py-3 text-ms border"> ${datas.keperluan }</td>
                                        <td class="px-4 py-3 text-ms border">
                                           ${datas.tanggal_peminjaman }</td>
                                        <td class="px-4 py-3 text-ms border">
                                           ${datas.status }</td>
                                        <td class="px-4 py-3 text-ms border"> ${datas.updated_at }</td>
                                       
                                    </tr>       
                                `)

                        }
                    }

                }
            })
        })

        // cari peminjaman berdasarkan tanggal
        $('#tanggals1, #tanggals2').on("change", () => {
            const tanggal1 = $('#tanggals1').val();
            const tanggal2 = $('#tanggals2').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: `/kelola-peminjaman?tanggals1=${tanggal1}&&tanggals2=${tanggal2}`,
                type: 'GET',
                contentType: false,
                processData: false,
                success: function(response) {
                    const tbody = $('#tbody');
                    const data = response.data;
                    console.log(data);
                    tbody.empty();

                    if (tanggal1 != null && tanggal2 != null) {

                        for (const datas of data) {
                            tbody.append(`
                                                        <tr class="text-gray-700 text-center">
                                                            <td class="px-4 py-3 text-ms border">
                                                            ${datas.nama_lengkap}
                                                            </td>
                                                            <td class="px-4 py-3 text-ms border">
                                                            ${datas.kelas       }
                                                            </td>
                                                            <td class="px-4 py-3 text-ms border">
                                                            ${datas.nama_barang}
                                                            </td>
                                                            <td class="px-4 py-3 text-ms border">${datas.kode_barang}</td>
                                                            <td class="px-4 py-3 text-ms border">${datas.keperluan}</td>
                                                            <td class="px-4 py-3 text-ms border">
                                                            ${datas.tanggal_peminjaman}</td>
                                                            <td class="px-4 py-3 text-ms border"> ${datas.status}</td>
                                                            <td class="px-4 py-3 text-ms border"> ${datas.updated_at}</td>
                                                    
                                                              
                                                           
                                                        </tr>
                                `)
                        }
                    }
                }
            })

        })
    </script>
@endsection
