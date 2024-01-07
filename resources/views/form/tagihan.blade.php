@extends('core.index')
@section('content')
    <div class="container grid grid-cols-12 bg-white w-full h-full shadow-md px-4">
        <div class="w-full col-span-12">
            {{-- header section --}}
            <div class="container">
                <div class="mt-14 px-5">
                    <nav
                        class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                        <div class="flex  justify-between md:flex-row md:items-center">
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
                                                Tagihan</p>
                                        </li>
                                    </ol>
                                </nav>

                                <h6
                                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                                    Buat Tagihan</h6>


                                <div>

                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- end header section --}}

            <div class="order-date w-full">
                <form action="" class="mt-5 mx-auto flex">
                    <div class="mr-1">
                        <input type="date" id="tanggal1" name="tanggal1"
                            class="w-full px-4 py-2 border border-gray-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">
                    </div>
                    <div class="ml-1 mr-1">
                        <input type="date" id="tanggal2" name="tanggal2"
                            class="w-full px-4 py-2 border border-gray-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">

                    </div>
                    <div class="ml-1">
                        <button type="submit"
                            class="w-full px-4 py-2 border border-slate-700 text-white bg-slate-700 hover:bg-slate-900 rounded-md shadow-sm focus:outline-none focus:border-blue-900 focus:ring focus:ring-blue-200">Terapkan</button>
                    </div>
                </form>
            </div>

            <div class="container border rounded-md mt-10">
                <div class="mt-14 mb-14 px-5">
                    <div class="header">
                        <h3 class="text-center font-bold underline  ">SMK PERSADA MAKASSAR</h3>
                        <h3 class="text-center font-bold">KWITANSI PEMBAYARAN </h3>
                        <div class="flex justify-between mt-2">
                            <p class="ml-5 font-bold">NAMA : {{ $nama[0]->nama_siswa }}</p>
                            <p class="mr-5 font-bold">KELAS : {{ $nama[0]->nis }} / {{ $nama[0]->kelas }}</p>
                        </div>
                        <table class="w-full table pembayaran mt-3">
                            <thead class="sticky top-0">
                                <tr
                                    class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-5 py-3">No</th>
                                    <th class="px-20 py-3">Keterangan Pembayaran</th>
                                    <th class="px-20 py-3">Jumlah</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">1</td>
                                    <td class="px-4 py-3 text-ms border">Biaya Pembangunan</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalPembangunan, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">2</td>
                                    <td class="px-4 py-3 text-ms border">Sumbangan Pembinaan Pendidikan (SPP)</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalSpp, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">3</td>
                                    <td class="px-4 py-3 text-ms border">Organisasi Siswa Intra Sekolah</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalOsis, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">4</td>
                                    <td class="px-4 py-3 text-ms border">Laboratorium (LAB)</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalLab, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">5</td>
                                    <td class="px-4 py-3 text-ms border">Biaya Semester</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalSemesterGanjil, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">6</td>
                                    <td class="px-4 py-3 text-ms border">Pendidikan Sistem Ganda</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalPsg, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">7</td>
                                    <td class="px-4 py-3 text-ms border">Ujian Sekolah Dan UKK</td>
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalSemesterGenap, 0, ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">8</td>
                                    <td class="px-4 py-3 text-ms border">Tunggakan dan Alumni
                                    <td class="px-4 py-3 text-ms border">
                                        Rp. {{ number_format($totalAlumni, 0, ',', '.') }}
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                        <div class="container grid grid-cols-12 mt-5">
                            <div class="col-span-6">
                                <p class="font-bold">Yang Menerima</p>
                                <p class="font-bold mt-28">
                                    Muliyadi, S.T., S.Pd., M.M <br> Bendahara
                                </p>
                            </div>
                            <div class="col-span-6">
                                <p class="text-end font-bold"> Total : Rp. {{ number_format($totalAll, 0, ',', '.') }}
                                </p>
                                <div class="mt-28">
                                    <h4 class="font-bold">Catatan</h4>
                                    <p>- Di simpan sebagai bukti pembayaran yang sah</p>
                                    <p>- Uang yang sudah dibayarkan tidak dapat di minta kembali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5 mb-5 flex justify-end">
                <button class="bg-red-500 mr-3 hover:bg-red-700 text-white px-4 py-2 rounded"><i
                        class="fa-solid fa-left-long"></i>
                    <a href="{{ url('/data-siswa') }}">Kembali</a>
                </button>
                <button class="bg-slate-700 hover:bg-slate-900 text-white px-4 py-2 rounded"><i
                        class="fa-solid fa-print"></i>
                    <a href="{{ url('/tagihan' . '/') }}">Cetak Tagihan</a>
                </button>
                {{--  --}}
            </div>

        </div>

    </div>
@endsection
