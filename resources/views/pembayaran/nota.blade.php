{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>SMK PERSADA</title>
</head>

<body>
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


    </div>

    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="path-to-your/app.css">
    <title>SMK PERSADA</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            border: 1px solid #000;
            border-radius: 5px;
            margin-top: 10px;
        }

        /* Add more styles based on your existing classes and elements */
    </style>
</head>

<body>
    <div class="container">
        <div style="margin-top: 14px; margin-bottom: 14px; padding: 5px;">
            <div class="header">
                <h3 style="text-align: center; font-weight: bold; text-decoration: underline;">SMK PERSADA MAKASSAR</h3>
                <h3 style="text-align: center; font-weight: bold;">KWITANSI PEMBAYARAN </h3>
                <!-- Add more inline styles based on your existing classes -->
                <div style="display: flex; justify-content: space-between; margin-top: 2px;">
                    <p style="margin-left: 5px; font-weight: bold;">NAMA : {{ $nama[0]->nama_siswa }}</p>
                    <p style="margin-right: 5px; font-weight: bold;">KELAS : {{ $nama[0]->kelas }} / NIS :
                        {{ $nama[0]->nis }}</p>
                </div>
                <table style="width: 100%; border-collapse: collapse;" class="pembayaran">
                    <thead style="position: sticky; top: 0;">
                        <tr
                            style="text-align: center; font-weight: bold; text-transform: uppercase; border-bottom: 1px solid #666;">
                            <th style="padding: 5px;">No</th>
                            <th style="padding: 20px;">Keterangan Pembayaran</th>
                            <th style="padding: 20px;">Jumlah</th>
                        </tr>
                    </thead>

                    <tbody style="background-color: #fff;">
                        <!-- Add more rows based on your existing code -->
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

                <div style="display: grid; grid-template-columns: repeat(12, 1fr); margin-top: 5px;">
                    <div style="grid-column: span 6;">
                        <p style="font-weight: bold;">Yang Menerima</p>
                        <p style="font-weight: bold; margin-top: 28px;">Muliyadi, S.T., S.Pd., M.M <br> Bendahara</p>
                    </div>
                    <div style="grid-column: span 6;">
                        <p style="text-align: end; font-weight: bold;"> Total : Rp. Total Amount</p>
                        <div style="margin-top: 28px;">
                            <h4 style="font-weight: bold;">Catatan</h4>
                            <p>- Di simpan sebagai bukti pembayaran yang sah</p>
                            <p>- Uang yang sudah dibayarkan tidak dapat di minta kembali</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
