<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 my-4 drop-shadow-md">Profil Lembaga</h2>
    </div>

    {{-- Map Section Start --}}
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 items-stretch">
        <div class="md:hidden min-h-96 bg-contain bg-no-repeat bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/kutim3.png');">
        </div>
        <div class="content-center rounded-lg px-6 py-8 place-self-center bg-gray-300/20 shadow">
            <h2><strong>LAZ SWARA Kutai Timur </strong>merupakan lembaga amil zakat yang berdiri sejak tahun 2019 dan
                telah resmi mendapatkan izin operasional oleh Kementerian Agama Provinsi Kalimantan Timur dengan nomor
                215 pada tanggal 3 Mei 2019. Dengan izin resmi tersebut menjadikan LAZ SWARA sebagai lembaga zakat
                pertama tingkat kabupaten yang berdiri di Kabupaten Kutai Timur. LAZ Swara Kutai Timur memiliki fungsi
                untuk menghimpun, menyalurkan, dan mengelola dana zakat, infak, sedekah, dan dana sosial lainnya,
                seperti CSR.
            </h2>
        </div>
        <div class="hidden md:block relative w-full aspect-square bg-contain bg-no-repeat bg-center rounded-lg shadow"
            style="background-image: url('/img/kutim3.png');">
        </div>
    </div>
    {{-- Map Section End --}}

    {{-- Visi Misi Section Start --}}
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 items-stretch">
        <div class="md:hidden min-h-96 bg-contain bg-no-repeat bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/visimisi.jpeg');">
        </div>
        <div class="content-center rounded-lg px-6 py-8 place-self-center bg-gray-300/20 shadow">
            <h2><strong>Visi: </strong> <br>
                Menjadi lembaga pengelola zakat, infaq, dan sedekah yang amanah dan profesional di Kabupaten Kutai
                Timur. <br> <br>
                <strong>Misi: </strong> <br>
                <ol class="list-decimal ml-5">
                    <li>Meningkatkan kompetensi SDM yang amanah.</li>
                    <li>Meningkatkan tata kelola zakat, infaq, dan sedekah yang profesional.</li>
                    <li>Membangun jejaring dengan berbagai pihak untuk sinergitas pengelolaan zakat, infaq, dan sedekah.
                    </li>
                </ol>
            </h2>
        </div>
        <div class="hidden md:block relative w-full h-96 aspect-square bg-cover bg-no-repeat bg-center rounded-lg shadow"
            style="background-image: url('/img/visimisi.jpeg');">
        </div>
    </div>
    {{-- Visi Misi Section End --}}

    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 my-8 drop-shadow-md">Struktur
            Lembaga</h2>
    </div>

    {{-- Struktur Section Start --}}
    <div
        class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 my-4 break-words md:break-normal gap-4 items-stretch text-center">
        <div class="content-start rounded-lg px-6 py-8 bg-white">
            <div class="mb-2 h-64 w-full flex items-end justify-center">
                <img src="/img/ab1.png" alt="Joni Ariansyah" class="max-h-full object-contain">
            </div>
            <h2><strong>Joni Ariansyah, S.Pt., M.Si.</strong> <br>
                Direktur LAZ Swara
            </h2>
        </div>
        <div class="content-start rounded-lg px-6 py-8 bg-white">
            <div class="mb-2 h-64 w-full flex items-end justify-center">
                <img src="/img/ab2.png" alt="M. Fikri Gozali" class="max-h-full object-contain">
            </div>
            <h2><strong>M. Fikri Gozali, S.IP.</strong> <br>
                Manager Operasional & <br>
                Bidang pendistribusian
            </h2>
        </div>
        <div class="content-start rounded-lg px-6 py-8 bg-white">
            <div class="mb-2 h-64 w-full flex items-end justify-center">
                <img src="/img/ab3.png" alt="Yulistri Reka Maulaa" class="max-h-full object-contain">
            </div>
            <h2><strong>Yulistri Reka Maulaa, SE.</strong> <br>
                Bidang Administrasi dan Keuangan
            </h2>
        </div>

        <div class="content-start rounded-lg px-6 py-8 bg-white">
            <div class="mb-2 h-64 w-full flex items-end justify-center">
                <img src="/img/ab4.png" alt="Aulia Anggraini S." class="max-h-full object-contain">
            </div>
            <h2><strong>Aulia Anggraini S., S.Pd.</strong> <br>
                Bidang Penghimpunan
            </h2>
        </div>
        <div class="content-start rounded-lg px-6 py-8 bg-white">
            <div class="mb-2 h-64 w-full flex items-end justify-center">
                <img src="/img/ab5.png" alt="Amanda Stevany Nurvita" class="max-h-full object-contain">
            </div>
            <h2><strong>Amanda Stevany Nurvita</strong> <br>
                Staff Bidang Media dan Informasi
            </h2>
        </div>
        <div class="content-start rounded-lg px-6 py-8 bg-white">
            <div class="mb-2 h-64 w-full flex items-end justify-center">
                <img src="/img/ab6.png" alt="Tegas Ahmad Ismunandar" class="max-h-full object-contain">
            </div>
            <h2><strong>Tegas Ahmad Ismunandar</strong> <br>
                Staff Bidang Pendistribusian
            </h2>
        </div>
    </div>
    {{-- Struktur Section End --}}


    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 my-8 drop-shadow-md">Legalitas</h2>
    </div>

    {{-- Legalitas Section Start --}}
    <div class="grid grid-cols-1 my-4 break-words md:break-normal gap-4 items-stretch">
        <div class="content-center rounded-lg px-6 py-8 bg-gray-300/20 shadow items-stretch">
            <h2>
                <ol class="list-decimal ml-5 leading-7">
                    <li>
                        <strong>NPWP: </strong>
                        39.015.875.6-724.000
                    </li>
                    <li>
                        <strong>Akta Notaris: </strong>
                        Rosita, S.H.,M.Kn. Nomor Akta: 39 Tanggal 19 Desember 2022
                    </li>
                    <li>
                        <strong>SK Menteri Hukum dan HAM: </strong>
                        SK Kemenkunham: No. AHU-0026040.AH.01.04.Tahun 2022
                    </li>
                </ol>
            </h2>
        </div>
    </div>
    {{-- Legalitas Section End --}}

</x-layout>
