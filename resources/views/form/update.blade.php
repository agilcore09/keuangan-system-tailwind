@extends('core.index')
@section('content')
    <div class="bg-gray-50/50 w-full py-5 container p-10">
        <form method="POST" action="{{ url('/data-siswa' . '/' . $data->nis) }}">
            @csrf
            @method('PUT')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Tambah Data data-siswa</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Tambahkan data siswa jika sudah fix menjadi siswa</p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="nama-siswa" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Siswa </label>
                            <div class="mt-1">
                                <input type="text" value="{{ $data->nama_siswa }}" name="nama_siswa" id="nama-siswa"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="nis" class="block text-sm font-medium leading-6 text-gray-900">NIS </label>
                            <div class="mt-1">
                                <input type="number" name="nis" value="{{ $data->nis }}" id="nis"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="nisn" class="block text-sm font-medium leading-6 text-gray-900">NISN </label>
                            <div class="mt-1">
                                <input type="number" name="nisn" value="{{ $data->nis }}"
                                    id="nisn
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="kelas" class="block text-sm font-medium leading-6 text-gray-900">Kelas </label>
                            <div class="mt-1">
                                <input type="text" name="kelas" value="{{ $data->kelas }}" id="kelas"
                                    autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="jurusan" class="block text-sm font-medium leading-6 text-gray-900">Jurusan</label>
                            <div class="mt-2">
                                <select id="jurusan" name="category_id" autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="{{ $data->category_id }}">{{ $data->Category->nama_jurusan }}</option>
                                    <option>Pilih Jurusan</option>
                                    @foreach ($jurusan as $datas)
                                        <option value="{{ $datas->id }}">{{ $datas->nama_jurusan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-span-2">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Kelas
                                Siswa</label>
                            <div class="mt-2">
                                <select id="kelas-siswa" name="type_id" autocomplete="off"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="{{ $data->type_id }}">{{ $data->Type->type_name }}</option>
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
                <button type="button" id="button" class="text-sm font-semibold leading-6 text-gray-900"><a
                        href="{{ url('/data-siswa') }}">Cancel</a></button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit
                </button>
            </div>
        </form>
    </div>
@endsection
