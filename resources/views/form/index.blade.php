@extends('core.index')
@section('content')
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
                                        Data Siswa</p>
                                </li>
                            </ol>
                        </nav>
                        <h6
                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-gray-900">
                            Data Siswa</h6>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <div class="container mt-9 display-table">
        <div class="px-6 grid grid-cols-10">
            {{-- button wrap --}}
            <div class="buton-wrap col-span-5 pt-2">
                <button
                    class="middle none center flex items-center justify-center rounded-lg p-3 font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:bg-gray-50/50 active:bg-gray-500 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    data-ripple-dark="true" id="tombol-add">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>
            {{-- end button wrap --}}

            {{-- search section --}}
            <div class="search-wrap col-span-5 flex justify-end">
                <div>
                    <div class="pt-2 relative mx-auto text-gray-900">
                        <input
                            class="border-2 border-gray-900 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                            type="search" name="search" placeholder="Search" autocomplete="off">
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
        <div class="container">
            {{-- on card table section --}}
            <div class="table-section">
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Name</th>
                                        <th class="px-4 py-3">Age</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold text-black">Sufyan</p>
                                                    <p class="text-xs text-gray-600">Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-ms font-semibold border">22</td>
                                        <td class="px-4 py-3 text-xs border">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                Acceptable </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm border">6/4/2000</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold text-black">Stevens</p>
                                                    <p class="text-xs text-gray-600">Programmer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-md font-semibold border">27</td>
                                        <td class="px-4 py-3 text-xs border">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm">
                                                Pending </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm border">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Nora</p>
                                                    <p class="text-xs text-gray-600">Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-md font-semibold border">17</td>
                                        <td class="px-4 py-3 text-xs border">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm">
                                                Nnacceptable </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm border">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Ali</p>
                                                    <p class="text-xs text-gray-600">Programmer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border text-md font-semibold">23</td>
                                        <td class="px-4 py-3 border text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                Acceptable </span>
                                        </td>
                                        <td class="px-4 py-3 border text-sm">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Khalid</p>
                                                    <p class="text-xs text-gray-600">Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border text-md font-semibold">20</td>
                                        <td class="px-4 py-3 border text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-sm">
                                                Pending </span>
                                        </td>
                                        <td class="px-4 py-3 border text-sm">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Nasser</p>
                                                    <p class="text-xs text-gray-600">Pen Tester</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border text-md font-semibold">29</td>
                                        <td class="px-4 py-3 border text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                Acceptable </span>
                                        </td>
                                        <td class="px-4 py-3 border text-sm">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Mohammed</p>
                                                    <p class="text-xs text-gray-600">Web Designer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border text-md font-semibold">38</td>
                                        <td class="px-4 py-3 border text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                Acceptable </span>
                                        </td>
                                        <td class="px-4 py-3 border text-sm">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Saad</p>
                                                    <p class="text-xs text-gray-600">Data</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border text-md font-semibold">19</td>
                                        <td class="px-4 py-3 border text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                Acceptable </span>
                                        </td>
                                        <td class="px-4 py-3 border text-sm">6/10/2020</td>
                                    </tr>
                                    <tr class="text-gray-700">
                                        <td class="px-4 py-3 border">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-8 h-8 mr-3 rounded-full">
                                                    <img class="object-cover w-full h-full rounded-full"
                                                        src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                        alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-semibold">Sami</p>
                                                    <p class="text-xs text-gray-600">Developer</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 border text-md font-semibold">21</td>
                                        <td class="px-4 py-3 border text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm">
                                                Acceptable </span>
                                        </td>
                                        <td class="px-4 py-3 border text-sm">6/10/2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
