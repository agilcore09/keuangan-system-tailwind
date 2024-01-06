@extends('core.index')
@section('content')
    <div class="container grid grid-cols-12 bg-white w-full h-screen shadow-md px-4">
        <div class="w-full col-span-12">
            {{-- header section --}}
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
                                                Tagihan</p>
                                        </li>
                                    </ol>
                                </nav>
                                <h6
                                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                                    Buat Tagihan</h6>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- end header section --}}

            <div class="container border rounded-md mt-16">
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
                                    <td class="px-4 py-3 text-ms border">Rp. 1000.000</td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">2</td>
                                    <td class="px-4 py-3 text-ms border">Sumbangan Pembinaan Pendidikan (SPP)</td>
                                    <td class="px-4 py-3 text-ms border">Rp. 1000.000</td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">3</td>
                                    <td class="px-4 py-3 text-ms border">Organisasi Siswa Intra Sekolah</td>
                                    <td class="px-4 py-3 text-ms border">Rp. 1000.000</td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">4</td>
                                    <td class="px-4 py-3 text-ms border">Laboratorium (LAB)</td>
                                    <td class="px-4 py-3 text-ms border">Rp. 1000.000</td>
                                </tr>
                                <tr class="text-gray-700 text-center">
                                    <td class="px-1 py-1 text-ms border">5</td>
                                    <td class="px-4 py-3 text-ms border">Biaya Semester</td>
                                    <td class="px-4 py-3 text-ms border">Rp. 1000.000</td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
