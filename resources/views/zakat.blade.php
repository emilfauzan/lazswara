<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Firman Section Start --}}
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 items-stretch">
        <!-- Mobile Image (Visible only on small screens) -->
        <div class="md:hidden h-96 w-full rounded-lg shadow overflow-hidden flex items-end bg-gray-100">
            <img src="/img/zakat6.jpeg" alt="Zakat" class="w-full h-full object-cover">
        </div>

        <!-- Text Section (Stretching height) -->
        <div class="flex flex-col justify-center rounded-lg px-6 py-8 bg-gray-300/20 shadow">
            <h2 class="text-2xl font-extrabold mb-4">Firman Allah Tentang Zakat</h2>
            <h2 class="font-arabic p-4 text-ar text-2xl font-bold leading-relaxed text-justify">
                خُذْ مِنْ اَمْوَالِهِمْ صَدَقَةً تُطَهِّرُهُمْ وَتُزَكِّيْهِمْ بِهَا وَصَلِّ عَلَيْهِمْۗ اِنَّ صَلٰوتَكَ
                سَكَنٌ لَّهُمْۗ وَاللّٰهُ سَمِيْعٌ عَلِيْمٌ۝ اَلَمْ يَعْلَمُوْٓا اَنَّ اللّٰهَ هُوَ يَقْبَلُ التَّوْبَةَ
                عَنْ عِبَادِهٖ وَيَأْخُذُ الصَّدَقٰتِ وَاَنَّ اللّٰهَ هُوَ التَّوَّابُ الرَّحِيْمُ۝
            </h2>
            <h2 class="leading-relaxed text-justify">
                “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan menyucikan mereka dan
                mendoalah untuk mereka. Sesungguhnya doa kamu itu (menjadi) ketenteraman jiwa bagi mereka. Dan Allah
                Maha Mendengar lagi Maha Mengetahui. Tidaklah mereka mengetahui bahwa Allah menerima taubat dari
                hamba-hamba-Nya dan menerima zakat, dan bahwasanya Allah Maha Penerima taubat lagi Maha
                Penyayang?”<strong> (Q.S At-Taubah: 103-104)</strong>
            </h2>
        </div>

        <!-- Desktop Image (Matches text height) -->
        <div class="hidden md:flex w-full rounded-lg shadow overflow-hidden bg-gray-100">
            <img src="/img/zakat6.jpeg" alt="Zakat" class="w-full h-full object-cover">
        </div>
    </div>
    {{-- Firman Section End --}}


    {{-- Pengertian Section Start --}}
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 items-stretch">
        <!-- Mobile Image (Tinggi Maksimal & Gambar Tidak Terpotong) -->
        <div class="md:hidden h-[768px] w-full rounded-lg shadow overflow-hidden flex items-end bg-gray-100">
            <img src="/img/zakat7.png" alt="Pengertian Zakat" class="w-full h-full object-contain">
        </div>

        <!-- Text Section -->
        <div class="flex flex-col justify-center rounded-lg px-6 py-8 bg-gray-300/20 shadow">
            <h2 class="text-2xl font-extrabold mb-4">Pengertian Zakat</h2>

            <h2 class="text-justify"><strong>Zakat </strong>adalah rukun Islam ketiga dari lima rukun yang menjadi
                pondasinya. Zakat menurut bahasa artinya bersih dan berkembang. Dinyatakan bersih karena zakat
                membersihkan muzakki dari dosa dan mengembangkan pahalanya, selain itu zakat juga memperbanyak harta dan
                membuatnya menjadi keberkahan. Di samping itu pula, zakat mampu membersihkan hati orang-orang kaya dari
                penyakit kikir dan bakhil. Zakat juga merupakan ibadah dengan nilai sosial yang tinggi. Ia bisa memberi
                dampak positif terhadap kesejahteraan masyarakat.
            </h2>
        </div>

        <!-- Desktop Image -->
        <div class="hidden md:flex w-full rounded-lg shadow overflow-hidden bg-gray-100">
            <img src="/img/zakat7.png" alt="Pengertian Zakat" class="w-full h-full object-cover">
        </div>
    </div>
    {{-- Pengertian Section End --}}

    {{-- Jenis Section Start --}}
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 items-stretch">
        <div class="md:hidden h-[768px] w-full rounded-lg shadow overflow-hidden flex items-end bg-gray-100">
            <img src="/img/zakat8.png" alt="Jenis Zakat" class="w-full h-full object-contain">
        </div>

        <div class="flex flex-col justify-center rounded-lg px-6 py-8 bg-gray-300/20 shadow">
            <h2 class="text-2xl font-extrabold mb-4">Jenis Zakat</h2>
            <h2>
                <ol class="list-decimal ml-5">
                    <li>
                        <strong>Zakat Fitrah <br></strong>
                        <h2 class="text-justify">Zakat fitrah adalah zakat yang diperintahkan Nabi Muhammad kepada
                            umat Islam pada waktu diwajibkannya puasa di Bulan Ramadhan sampai hari terakhir bulan
                            ramadhan sebelum
                            shalat Idul Fitri. Zakat fitrah dapat dibayarkan berupa beras sebanyak 2,5 kg.</h2>
                    </li>
                    <li>
                        <strong>Zakat Maal <br></strong>
                        <h2 class="text-justify">Zakat maal
                            atau zakat harta merupakan zakat yang berkaitan dengan kepemilikan harta tertentu dan
                            memenuhi syarat
                            tertentu. Zakat maal meliputi zakat tumbuhan, zakat binatang ternak, zakat perniagaan, zakat
                            barang
                            tambang, serta zakat emas dan perak.</h2>
                    </li>
                </ol>
            </h2>
        </div>

        <div class="hidden md:flex w-full rounded-lg shadow overflow-hidden bg-gray-100">
            <img src="/img/zakat8.png" alt="Jenis Zakat" class="w-full h-full object-cover">
        </div>
    </div>
    {{-- Jenis Section End --}}

    {{-- Syarat Section Start --}}
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 items-stretch">
        <div class="md:hidden h-[768px] w-full rounded-lg shadow overflow-hidden flex items-end bg-gray-100">
            <img src="/img/zakat9.png" alt="Syarat Zakat" class="w-full h-full object-contain">
        </div>

        <div class="flex flex-col justify-center rounded-lg px-6 py-8 bg-gray-300/20 shadow">
            <h2 class="text-2xl font-extrabold mb-4">Syarat Zakat</h2>
            <h2>Berzakat juga memiliki syarat, diantaranya:</h2>
            <ol class="list-decimal ml-5">
                <li>Beragama Islam</li>
                <li>Berakal sehat dan dewasa</li>
                <li>Kepemilikan sempurna</li>
                <li>Muslim yang merdeka</li>
                <li>Harta berkembang (produktif atau berpotensi produktif) </li>
                <li>Mencapai nishab</li>
                <li>Kepemilikannya satu tahun penuh (haul) </li>
                <li>Bebas dari hutang</li>
            </ol>
        </div>

        <div class="hidden md:flex w-full rounded-lg shadow overflow-hidden bg-gray-100">
            <img src="/img/zakat9.png" alt="Syarat Zakat" class="w-full h-full object-cover">
        </div>
    </div>
    {{-- Syarat Section End --}}


</x-layout>
