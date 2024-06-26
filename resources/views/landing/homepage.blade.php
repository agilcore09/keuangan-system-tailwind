@extends('landing.core')
@section('body')
    {{-- navbar section --}}

    @include('landing.navbar')

    @include('landing.jumbotron')
    {{-- start why --}}
    <div class="grid md:grid-cols-12 grid-cols-12">
        <div class="col-span-10 col-start-2 font-body">
            <div class="kenapa mt-14" data-aos="fade-up">
                <h3 class="font-bold md:text-3xl text-xl text-center text-gray-800">Kenapa Harus <span
                        class=" font-bold text-blue-950">SMK
                        PERSADA
                        MAKASSAR</span> ? </h3>
                <p class="text-center md:text-lg text-gray-800">alasan kenapa harus memilih untuk mendaftar di <span
                        class=" font-bold text-blue-950">SMK PERSADA MAKASSAR</span></p>
            </div>
            <div class="alasan grid md:grid-cols-12 grid-cols-12 mt-12">
                <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none "
                    data-aos="fade-up">
                    <div class="grid grid-cols-12 md:col-span-6">
                        <div class="col-span-12 md:col-span-6 icons flex justify-center">
                            {{-- <i class="fa-solid fa-handshake fa-3x text-blue-950 hover:text-blue-900"></i> --}}

                            <img src="{{ asset('img/kerja-sama.png') }}" alt="kerja sama luas" class="w-60">

                        </div>
                        <div class="col-span-12 md:col-span-6 md:flex ">
                            <div class="md:self-center">
                                <h3
                                    class=" px-3 md:px-0 text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center">
                                    Kerja
                                    Sama
                                    Yang Luas</h3>
                                <p class=" text-sm font-body  text-center text-white">Kami telah bekerja sama dengan
                                    beberapa
                                    perusahaan
                                    terkenal
                                    dan
                                    terpercaya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none "
                    data-aos="fade-up">
                    <div class="grid grid-cols-12 md:col-span-6">
                        <div class="col-span-12 md:col-span-6 icons flex justify-center">
                            {{-- <i class="fa-solid fa-handshake fa-3x text-blue-950 hover:text-blue-900"></i> --}}

                            <img src="{{ asset('img/fasilitas.png') }}" alt="fasilitas lengkap" class="w-60">

                        </div>
                        <div class="col-span-12 md:col-span-6 md:flex ">
                            <div class="md:self-center">
                                <h3 class="font-bold text-xl md:text-2xl mt-3 font-body  text-center text-white">
                                    Fasilitas Yang Lengkap</h3>
                                <p class="px-3 md:px-0 text-sm font-body  text-center text-white">Kami telah bekerja sama
                                    dengan
                                    Penunjang pembelajaran dan praktikum dengan kualitas yang premium</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 md:mx-2 mb-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none "
                    data-aos="fade-up">
                    <div class="grid grid-cols-12 md:col-span-6">
                        <div class="col-span-12 md:col-span-6 icons flex justify-center">
                            {{-- <i class="fa-solid fa-handshake fa-3x text-blue-950 hover:text-blue-900"></i> --}}

                            <img src="{{ asset('img/lingkungan.png') }}" alt="lingkungan lengkap" class="w-60">

                        </div>
                        <div class="col-span-12 md:col-span-6 md:flex ">
                            <div class="md:self-center">
                                <h3 class=" text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center">
                                    Lingkungan Yang Nyaman</h3>
                                <p class="px-3 md:px-0 text-sm font-body  text-center text-white">Kami telah bekerja sama
                                    dengan
                                    beberapa perusahaan terkenal dan terpercaya</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 md:col-span-6 md:mx-2 mb-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none "
                    data-aos="fade-up">
                    <div class="grid grid-cols-12 md:col-span-6">
                        <div class="col-span-12 md:col-span-6 icons flex justify-center">
                            {{-- <i class="fa-solid fa-handshake fa-3x text-white hover:text-blue-900"></i> --}}

                            <img src="{{ asset('img/pengajar.png') }}" alt="pengajar lengkap" class="w-60">

                        </div>
                        <div class="col-span-12 md:col-span-6 md:flex ">
                            <div class="md:self-center">
                                <h3 class=" text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center">
                                    Pengajar Kompoten</h3>
                                <p class="px-3 md:px-0 text-sm font-body  text-center text-white">Kami telah bekerja sama
                                    dengan
                                    beberapa perusahaan terkenal dan terpercaya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- end why --}}

    {{-- sambutan kepsek --}}
    <div class="grid md:grid-cols-12 grid-cols-12 bg-blue-950 text-white">
        <div class="col-span-10 col-start-2 order-last md:order-first">
            <div class="grid grid-cols-10">
                <div class="col-span-10 md:col-span-5 md:py-14 py-1">
                    <div class="container font-body" data-aos="fade-right">
                        <div>
                            <h3 class="md:text-2xl font-bold md:pt-14 pt-9 mb-5">Assalamualaikum Wr. Wb</h3>
                        </div>
                        <div class="pembungkus">
                            <p class="md:text-lg">Selamat datang di SMK PERSADA MAKASSAR. Sekolah menengah kejuruan yang
                                memiliki
                                visi
                                “Menyiapkan
                                tenaga Ahli Terampil
                                Mandiri mengikuti perkembangan teknologi”.
                                Kami berkomitmen menyelenggarakan pendidikan yang berkualitas guna menghasilkan generasi
                                yang
                                unggul
                                dan berdaya saing
                                global</p>
                        </div>
                        <div>
                            <h3 class="text-lg mt-10 font-bold text-orange-500">- Ir. H. Zainuddin B Ilyas -</h3>
                        </div>


                        <div class="flex">
                            <div class="jumlahSiswa mt-5 mr-5 md:mr-5">
                                <h3 class="text-6xl font-bold text-center md:text-left" id="jumlah_siswa"></h3>
                                <p class="font-bold text-center md:text-left">Jumlah Siswa</p>
                            </div>

                            <div class="rataSiswa mt-5 md:ml-5">
                                <h3 class="text-6xl font-bold text-center md:text-left" id="rataSiswa">800</h3>
                                <p class="font-bold text-center md:text-left">Rata - rata Pendaftar</p>
                            </div>

                        </div>
                        <div class="mt-5 mb-10">
                            <a href="#"
                                class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                                Ayo Bergabung!!
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 md:col-span-5 pt-14 order-first md:order-last">
                    <img src="{{ asset('kepsek.png') }}" alt="kepsek.jpg" data-aos="fade-left">
                </div>

            </div>
        </div>
    </div>
    {{-- end sambutan kepsek --}}

    {{-- jurusan --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="md:mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">Program <span class="text-blue-950 font-bold">Keahlian</span>
                </h3>
                <p class="md:text-center text-sm text-justify">SMK Persada menonjol dengan keunggulan dualitas program
                    keahlian, Teknik
                    Komputer dan Jaringan (TKJ) serta Teknik Kendaraan Ringan (TKR), yang membekali siswa dengan
                    keterampilan teknis yang relevan dan mempersiapkan mereka untuk meniti karier yang sukses di dunia
                    teknologi dan otomotif.</p>
            </div>
            <div class="col-span-10">
                <div class="grid md:grid-cols-12 grid-cols-12">
                    <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none "
                        data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-6 icons flex justify-center">
                                {{-- <i class="fa-solid fa-handshake fa-3x text-blue-950 hover:text-blue-900"></i> --}}

                                <img src="{{ asset('img/tkj.png') }}" alt="tkj" class="w-60">

                            </div>
                            <div class="col-span-12 md:col-span-6 md:flex ">
                                <div class="md:self-center">
                                    <h3
                                        class=" px-3 md:px-0 text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center">
                                        Teknik Komputer Jaringan</h3>
                                    <p class=" text-sm font-body px-3 md:px-0 text-justify md:text-center text-white">
                                        Pendidikan terkini
                                        dalam bidang
                                        teknologi informasi, mempersiapkan siswa dengan keterampilan yang dibutuhkan untuk
                                        menjadi ahli jaringan komputer yang handal dan berkualitas tinggi di era digital
                                        saat ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-12 md:col-span-6 md:mx-2 my-5  bg-blue-950 rounded-md py-14 hover:bg-blue-900 hover:border-none "
                        data-aos="fade-up">
                        <div class="grid grid-cols-12 md:col-span-6">
                            <div class="col-span-12 md:col-span-6 icons flex justify-center">
                                {{-- <i class="fa-solid fa-handshake fa-3x text-blue-950 hover:text-blue-900"></i> --}}
                                <img src="{{ asset('img/tkr.png') }}" alt="tkr" class="w-60">

                            </div>
                            <div class="col-span-12 md:col-span-6 md:flex ">
                                <div class="md:self-center">
                                    <h3
                                        class=" px-3 md:px-0 text-white font-bold text-xl md:text-2xl mt-3 font-body  text-center">
                                        Teknik Kendaraan Ringan</h3>
                                    <p class=" text-sm font-body px-3 md:px-0 text-justify md:text-center text-white">
                                        Memberikan pelatihan
                                        mendalam tentang mekanika, perawatan, dan perbaikan kendaraan bermotor,
                                        mempersiapkan siswa dengan keterampilan praktis dan teoritis yang diperlukan untuk
                                        menjadi ahli di industri otomotif modern.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- end jurusan --}}




    {{-- gallery --}}
    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="md:mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">Gallery <span class="text-blue-950 font-bold">Kami</span>
                </h3>
                <p class="text-center text-sm">Beberapa foto kegiatan yang di lakukan siswa</p>
            </div>
            <div class="col-span-10 mt-14">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php
                    $files = scandir('../public/gallery');
                    
                    // Menghapus nilai ". dan .."
                    $filteredFiles = array_filter($files, function ($value) {
                        return $value !== '.' && $value !== '..';
                    });
                    
                    // Reindeks array jika diperlukan
                    $filteredFiles = array_values($filteredFiles); ?>

                    @foreach ($filteredFiles as $file)
                        <div class="grid gap-4 ">
                            <div>
                                <a data-fslightbox="first-lightbox" href="{{ asset('/gallery' . '/' . $file) }}">
                                    <img class="max-w-full rounded-lg hover:grayscale"
                                        src="{{ asset('/gallery' . '/' . $file) }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    {{-- end gallery --}}


    <div class="grid md:grid-cols-12 grid-cols-12 my-14">
        <div class="col-span-10 col-start-2">
            <div class="md:mt-14" data-aos="fade-up">
                <h3 class="font-bold text-2xl text-center">Sertivikasi<span class="text-blue-950 font-bold">
                        Internasional</span>
                </h3>
                <p class="text-center text-sm">Kami memiliki dan telah bekerja sama dengan beberapa perusahaan
                    internasional</p>
            </div>

            {{-- grid sertivikasi --}}
            <div class="grid md:grid-cols-12 grid-cols-12">
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/mikrotik.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs">Mikrotik Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/google.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Google Suite</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/365.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Microsoft 365</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/redhat.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Redhat Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/fortinet.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Fortinet Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/paloalto.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Paloalto Network</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/oracle-academy.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Oracle Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/vmware.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">VMWARE IT Academy</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/ndg.jpg') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">NDG</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/Bootstrap.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Bootstrap Studio</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/autodesk.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Autodesk</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/lucidchart.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Lucidchart</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/jetbrain.jpg') }}" class="w-full hover:grayscale"
                            alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Jetbrain For Student</h3>
                </div>
                <div class="col-span-6 sm:col-span-3 md:col-span-3 my-5">
                    <div class="w-full flex justify-center self-end p-5">
                        <img src="{{ asset('/sertivikasi/canva.png') }}" class="w-full hover:grayscale" alt="">
                    </div>
                    <h3 class="font-bold text-center md:text-md text-xs ">Canva For Education</h3>
                </div>

            </div>
        </div>
    </div>


    <script>
        function animateValue(id, start, end, duration) {
            var obj = document.getElementById(id);
            var range = end - start;
            var current = start;
            var increment = end > start ? 1 : -1;
            var stepTime = Math.abs(Math.floor(duration / range));
            var stepValue = Math.ceil(range / (duration / stepTime)); // Hitung nilai langkah

            var timer = setInterval(function() {
                current += stepValue; // Melangkah sebanyak nilai langkah
                if ((increment > 0 && current >= end) || (increment < 0 && current <= end)) {
                    clearInterval(timer);
                    current = end;
                }
                if (current == end) {
                    obj.innerHTML = current + "+"; // Tambahkan "++" setelah nilai akhir
                } else {
                    obj.innerHTML = current;
                }
            }, stepTime);
        }

        // Panggil fungsi animateValue dengan parameter ID, nilai awal, nilai akhir, dan durasi animasi (dalam milidetik)
        animateValue("jumlah_siswa", 0, 800, 1000);
        animateValue("rataSiswa", 0, 439, 1000);
    </script>

    @include('landing.footer')
@endsection
