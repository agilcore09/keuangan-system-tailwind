@extends('core.index')
@section('content')
    <div class="bg-white p-8 rounded shadow-md max-w-full">
        <div class="text-center">
            <img src="{{ asset('foto_siswa/' . $data[0]->gambar) }}" alt="Profile Picture"
                class="rounded-full mx-auto mb-4 h-28 w-28">
            <h2 class="text-xl font-bold">{{ $data[0]->nama_siswa }}</h2>
            <p class="text-gray-500">{{ $data[0]->nis }} | {{ $data[0]->nisn }}</p>
        </div>
        {{-- table section --}}
        <div class="container w-full">
            {{-- on card table section --}}
            <div class="table-section">
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto overflow-y-scroll h-80">
                            <table class="w-full table pembayaran">
                                <thead class="sticky top-0">
                                    <tr
                                        class="text-md font-semibold tracking-wide text-center text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-20 w-full py-3">Tanggal Bayar</th>
                                        <th class="px-20 py-3">Nama Siswa</th>
                                        <th class="px-20 py-3">Kelas</th>
                                        <th class="px-20 py-3">NIS</th>
                                        <th class="px-20 py-3">NISN</th>
                                        <th class="px-20 py-3">Jurusan</th>
                                        <th class="px-20 py-3">Pembangunan</th>
                                        <th class="px-20 py-3">Tunggakan</th>
                                        <th class="px-20 py-3">SPP</th>
                                        <th class="px-20 py-3">LAB</th>
                                        <th class="px-20 py-3">OSIS</th>
                                        <th class="px-20 py-3">Semester Ganjil</th>
                                        <th class="px-20 py-3">Semester Genap</th>
                                        <th class="px-20 py-3">PSG</th>
                                        <th class="px-20 py-3">UAS</th>
                                        <th class="px-20 py-3">Keterangan</th>
                                        <th class="px-4 py-3">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white" id="tbody">
                                    @foreach ($data as $item)
                                        <tr class="text-gray-700 text-center">
                                            <td class="w-full py-3 text-ms border">
                                                {{ $item->tanggal_bayar }}
                                            </td>
                                            <td class="w-full py-3 text-ms border">
                                                {{ $item->nama_siswa }}
                                            </td>
                                            <td class="w-full py-3 text-ms border">
                                                {{ $item->kelas }}
                                            </td>
                                            <td class="w-full py-3 text-ms border">{{ $item->nis }}</td>
                                            <td class="w-full py-3 text-ms border">{{ $item->nisn }}</td>
                                            <td class="w-full py-3 text-ms border">
                                                {{ $item->nama_jurusan }}
                                            </td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->pembangunan }}</td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->tunggakan }}</td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->spp }}</td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->lab }}</td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->osis }}</td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->semester_ganjil }}
                                            </td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->semester_genap }}
                                            </td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->psg }}</td>
                                            <td class="w-full py-3 text-ms border">Rp. {{ $item->lab }}</td>
                                            <td class="w-full py-3 text-ms border">{{ $item->keterangan }}</td>
                                            <td class="w-full py-3 text-ms border">
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

            {{-- button --}}
            <div class="flex justify-end pr-5">
                <button class="bg-sky-500 mr-3 hover:bg-sky-700 text-white px-4 py-2 rounded"><i
                        class="fa-solid fa-left-long"></i>
                    <a href="{{ url('/data-siswa') }}">Kembali</a>
                </button>
                <button class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded"><i class="fa-solid fa-wallet"></i>
                    <a href="{{ url('/tagihan' . '/' . $nis) }}">Cetak Tagihan</a>
                </button>
            </div>
        </div>


    </div>
@endsection
