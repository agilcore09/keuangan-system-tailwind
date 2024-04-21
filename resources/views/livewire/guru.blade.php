<div class="grid grid-cols-12  ">
    <div class="col-span-3">
        @include('core.sidebar')
    </div>
    <div class="col-span-9">
        <div class="container">
            <div class="mt-14 px-5">
                <nav
                    class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
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
                                            Daftar Guru</p>
                                    </li>
                                </ol>
                            </nav>
                            <h6
                                class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                                List Guru</h6>
                        </div>

                    </div>
                </nav>
            </div>
        </div>


        <div class="container mt-9 display-table">

            <div class="px-6 grid grid-cols-10">
                {{-- button wrap --}}
                <div class="buton-wrap col-span-5 pt-2 flex">
                    <div>
                        <button
                            class="middle none center flex items-center justify-center rounded-lg p-4 font-sans text-xs font-bold uppercase bg-gray-200 text-gray-900 transition-all hover:bg-gray-50/50 active:bg-gray-500 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-dark="true" id="btn-add-pembayaran">
                            <i class="fa-solid fa-plus"></i>
                        </button>
                    </div>

                </div>
                {{-- end button wrap --}}

                {{-- search section --}}
                <div class="search-wrap col-span-5 flex justify-end">
                    <div>
                        <div class="pt-2 relative mx-auto text-gray-900">
                            <input
                                class="border-2 border-gray-900 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                                type="search-nis" name="search" placeholder="Search NIS" autocomplete="off"
                                id="search-nis">
                            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                <svg class="text-gray-900 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px"
                                    y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
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
                                {{-- end loading section --}}
                                <table class="w-full table pembayaran">
                                    <thead class="sticky top-0">
                                        <tr
                                            class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                            <th class="px-5  py-3">No</th>
                                            <th class="px-20 py-3">Nama</th>
                                            <th class="px-20 py-3">Email</th>
                                            <th class="px-4 py-3">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody class="bg-white" id="tbody">
                                        <?php $no = 1; ?>
                                        @foreach ($data as $item)
                                            <tr class="text-gray-700 text-center">

                                                <td class="px-4 py-3 text-ms border">{{ $no++ }}</td>
                                                <td class="px-4 py-3 text-ms border">{{ $item->name }}</td>
                                                <td class="px-4 py-3 text-ms border">{{ $item->email }}</td>

                                                <td class="px-4 py-3 text-ms border">
                                                    <div class="flex justify-center">
                                                        <a href="{{ url('/pembayaran' . '/' . $item->id . '/edit') }}"><i
                                                                class="fa-solid fa-circle-info text-green-500 mr-1  "></i></a>
                                                        <form action="{{ url('/pembayaran' . '/' . $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"> <i
                                                                    class="fa-solid fa-trash text-red-600 ml-1"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>


                        </div>
                    </section>
                </div>
            </div>

            {{-- add data modal --}}
            <div class="container display-add bg-white shadow-xl p-9 absolute top-10 w-3/4 h-screen hidden">
                <form method="POST" action="{{ url('data-siswa') }}" enctype="multipart/form-data" id="form-add">
                    @csrf
                    @method('POST')
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Tambah Data data-siswa</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Tambahkan data siswa jika sudah fix menjadi
                                siswa
                            </p>

                            {{-- alert section --}}
                            <div class="error-page">

                            </div>

                            {{-- end alert section --}}
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <label for="gambar"
                                        class="gambar block text-sm font-medium leading-6 text-gray-900">Foto
                                        Siswa </label>
                                    <div class="mt-1">
                                        <input type="file" name="gambar" id="gambar" autocomplete="off"
                                            class="block w-full rounded-md border-0  py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="nama-siswa"
                                        class="block text-sm font-medium leading-6 text-gray-900">Nama
                                        Siswa </label>
                                    <div class="mt-1">
                                        <input type="text" name="nama_siswa" id="nama_siswa" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="nis"
                                        class="block text-sm font-medium leading-6 text-gray-900">NIS
                                    </label>
                                    <div class="mt-1">
                                        <input type="number" name="nis" id="nis" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="col-span-full">
                                    <label for="nis"
                                        class="block text-sm font-medium leading-6 text-gray-900">NISN
                                    </label>
                                    <div class="mt-1">
                                        <input type="number" name="nisn" id="nisn" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="col-span-2">
                                    <label for="jurusan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
                                    <div class="mt-2">
                                        <select id="kelas" name="kelas" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Pilih Kelas</option>

                                            <option value="VII A">VII A</option>
                                            <option value="VII B">VII B</option>
                                            <option value="VIII A">VIII A</option>
                                            <option value="VIII B">VIII B</option>
                                            <option value="IX A">IX A</option>
                                            <option value="IX B">IX B</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <label for="jurusan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Jurusan</label>
                                    <div class="mt-2">
                                        <select id="category_id" name="category_id" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Pilih Jurusan</option>
                                            @foreach ($jurusan as $datas)
                                                <option value="{{ $datas->id }}">{{ $datas->nama_jurusan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-2">
                                    <label for="country"
                                        class="block text-sm font-medium leading-6 text-gray-900">Kelas
                                        Siswa</label>
                                    <div class="mt-2">
                                        <select id="type_id" name="type_id" autocomplete="off"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option>Pilih Kelas Siswa</option>
                                            @foreach ($kelasSiswa as $datas)
                                                <option value="{{ $datas->id }}">{{ $datas->type_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" id="button-cancel"
                            class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                            id="btn-add">Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
