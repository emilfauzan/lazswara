<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Sub-Title Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 mb-6 drop-shadow-md">Laporan Keuangan
            Kami</h2>
    </div>
    {{-- Sub-Title Section End --}}

    {{-- Banner Setion Start --}}
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/official3.jpeg');">

            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64 px-8">
                <h2 class="text-xl drop-shadow-md">Sebagai bentuk <strong>transparansi dan tanggung jawab</strong>, kami
                    membuat laporan keuangan setiap tahun yang dapat diakses dibawah ini.</h2>
            </div>
        </div>
    </div>
    {{-- Banner Setion End --}}

    {{-- Laporan Section Start --}}
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4">
        {{-- Laporan Akhir Tahun 2020 --}}
        <a href="{{ url('/files/SMU - Laporan Akhir Tahun 2020.pdf') }}" target="_blank">
            <div class="content-center rounded-lg justify-center items-center border-2 px-8 py-4">
                <ul>
                    <li class="text-lg drop-shadow-md">
                        <strong>
                            1. Laporan Keuangan 2020 &raquo;
                        </strong>
                    </li>
                </ul>
            </div>
        </a>
        {{-- Laporan Akhir Tahun 2021 --}}
        <a href="{{ url('/files/SMU - Laporan Akhir Tahun 2021.pdf') }}" target="_blank">
            <div class="content-center rounded-lg justify-center items-center border-2 px-8 py-4">
                <ul>
                    <li class="text-lg drop-shadow-md">
                        <strong>
                            2. Laporan Keuangan 2021 &raquo;
                        </strong>
                    </li>
                </ul>
            </div>
        </a>
        {{-- Laporan Akhir Tahun 2022 --}}
        <a href="{{ url('/files/SMU - Laporan Akhir Tahun 2022.pdf') }}" target="_blank">
            <div class="content-center rounded-lg justify-center items-center border-2 px-8 py-4">
                <ul>
                    <li class="text-lg drop-shadow-md">
                        <strong>
                            3. Laporan Keuangan 2022 &raquo;
                        </strong>
                    </li>
                </ul>
            </div>
        </a>
        {{-- Laporan Akhir Tahun 2023 --}}
        <a href="{{ url('/files/SMU - Laporan Akhir Tahun 2023.pdf') }}" target="_blank">
            <div class="content-center rounded-lg justify-center items-center border-2 px-8 py-4">
                <ul>
                    <li class="text-lg drop-shadow-md">
                        <strong>
                            4. Laporan Keuangan 2023 &raquo;
                        </strong>
                    </li>
                </ul>
            </div>
        </a>
    </div>
    {{-- Laporan Akhir Tahun 2024 --}}
    <a href="{{ url('/files/SMU - Laporan Akhir Tahun 2024.pdf') }}" target="_blank">
        <div class="content-center rounded-lg justify-center items-center border-2 px-8 py-4">
            <ul>
                <li class="text-lg drop-shadow-md">
                    <strong>
                        5. Laporan Keuangan 2024 &raquo;
                    </strong>
                </li>
            </ul>
        </div>
    </a>
    </div>

    {{-- Laporan Section End --}}
    </div>

</x-layout>
