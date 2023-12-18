@extends('core.index')
@section('content')
    <div class="container display-add bg-white shadow-xl p-9">
        <form method="POST" action="{{ url('pembayaran' . '/' . $data->id) }}" id="form-update">
            @csrf
            @method('PATCH')
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">form Input Pembayaran</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Tambahkan Pembayaran Siswa</p>

                    {{-- alert section --}}
                    <div class="error-page">

                    </div>
                    {{-- end alert section --}}



                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="jurusan" class="block text-sm font-medium leading-6 text-gray-900">Pilih
                                Siswa</label>
                            <div class="mt-3">
                                <select id="nama_siswa" name="nama_siswa" autocomplete="off"
                                    class="rounded-lg nama_siswa  border text-gray-900 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5">
                                    <option value="{{ $data->Siswa->id }}">{{ $data->Siswa->nama_siswa }}</option>
                                    @foreach ($nama_siswa as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama_siswa }}
                                            ||
                                            {{ $item->nis }}
                                            ||
                                            {{ $item->nisn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="pembangunan" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                Pembangunan
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('pembangunan') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->pembangunan }}" type="number" id="pembangunan" name="pembangunan"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('pembangunan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('pembangunan')) Form ini kosong!!! @else Masukkan Biaya Tunggakan @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="tunggakan" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                Tunggakan
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('tunggakan') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->tunggakan }}" type="number" id="tunggakan" name="tunggakan"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('tunggakan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('tunggakan')) Form ini kosong!!! @else Masukkan Biaya Tunggakan @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="spp" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                SPP
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0  @error('spp') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->spp }}" type="number" id="spp" name="spp"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm  @error('spp') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('spp')) Form ini kosong!!! @else Masukkan Biaya SPP @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="lab" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                LAB
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('lab') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->lab }}" type="number" id="lab" name="lab"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('lab') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('lab')) Form ini kosong!!! @else Masukkan Biaya LAB @endif">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="lab" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                OSIS
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('osis') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->osis }}" type="number" id="osis" name="osis"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('osis') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('osis')) Form ini kosong!!! @else Masukkan Biaya OSIS @endif ">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="semester_ganjil"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                Semester Ganjil
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('semester_ganjil') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->semester_ganjil }}" type="number" id="semester_ganjil"
                                    name="semester_ganjil"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('semester_ganjil') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('semester_ganjil')) Form ini kosong!!! @else Masukkan Biaya Semester Ganjil @endif ">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="semester_ganjil"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                Semester Genap
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('semester_genap') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>

                                <input value="{{ $data->semester_genap }}" type="number" id="semester_genap"
                                    name="semester_genap"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('semester_genap') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('semester_genap')) Form ini kosong!!! @else Masukkan Semester Genap @endif">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="semester_ganjil"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                UAS
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('uas') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>

                                <input value="{{ $data->uas }}" type="number" id="uas" name="uas"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('uas') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('uas')) Form ini kosong!!! @else Masukkan Biaya Uas @endif">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="semester_ganjil"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Biaya
                                PSG
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('psg') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->psg }}" type="number" id="psg" name="psg"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('psg') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('psg')) Form ini kosong!!! @else Masukkan Nilai Biaya PSG @endif">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="semester_ganjil"
                                class="block text-sm font-medium leading-6 text-gray-900 mb-3">Keterangan
                            </label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 @error('keterangan') border-rose-500 @enderror rounded-l-md">
                                    Rp.
                                </span>
                                <input value="{{ $data->keterangan }}" type="text" id="keterangan" name="keterangan"
                                    class="rounded-none rounded-r-lg  border text-gray-900 block flex-1 min-w-0 w-full text-sm @error('keterangan') border-rose-500 @enderror p-2.5"
                                    placeholder="@if ($errors->has('keterangan')) Form ini kosong!!! @else Masukkan Keterangan @endif">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900"><a
                        href="{{ url('/pembayaran') }}">Cancel </a></button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    id="btn-add">Submit
                </button>
            </div>
        </form>
    </div>
    {{-- end add data --}}
@endsection
