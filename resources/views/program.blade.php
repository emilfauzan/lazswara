<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Program Section Start --}}
    <div class="relative my-8 rounded-lg py-6 px-2" id="program">
        <!-- Title -->
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 drop-shadow-md">
            Program Kami
        </h2>
    </div>
    <div x-data="{ activePage: null }">
        <!-- Buttons -->
        <div x-show="activePage === null"
            class="grid grid-cols-1 md:grid-cols-2 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">

            <!-- PENDIDIKAN -->
            <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program1.png');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>PENDIDIKAN</strong></h2>
                    <button
                        @click="activePage = 'a'; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &raquo;
                    </button>
                </div>
            </div>

            <!-- KESEHATAN -->
            <div class="bg-cover bg-top rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program2.png');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>KESEHATAN</strong></h2>
                    <button
                        @click="activePage = 'b'; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &raquo;
                    </button>
                </div>
            </div>

            <!-- KEMANUSIAAN -->
            <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program3.jpeg');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>KEMANUSIAAN</strong></h2>
                    <button
                        @click="activePage = 'c'; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &raquo;
                    </button>
                </div>
            </div>

            <!-- EKONOMI -->
            <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program4.jpeg');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>EKONOMI</strong></h2>
                    <button
                        @click="activePage = 'd'; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &raquo;
                    </button>
                </div>
            </div>

            <!-- DAKWAH (Full Width on Desktop) -->
            <div class="col-span-1 md:col-span-2">
                <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                    style="background-image: url('/img/program5.png');">
                    <div
                        class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                        <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>DAKWAH</strong></h2>
                        <button
                            @click="activePage = 'e'; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                            class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                            Lihat Program &raquo;
                        </button>
                    </div>
                </div>
            </div>

        </div>


        <!-- Sub-Pages -->
        {{-- 1. Pendidikan Sub-Page --}}
        <div x-show="activePage === 'a'" class="my-4 p-4 bg-white rounded-md justify-items-center">
            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend1.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend6.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend8.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend7.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/p/pend5.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

            </div>

            <div class="bg-teal-500/20 rounded-lg px-4 py-8 mb-4 shadow-lg">
                <h2 class="text-xl font-bold text-center">Program Pendidikan:</h2>
                <p class="text-center">Program membantu meringankan biaya pendidikan mustahik seperti pelunasan biaya
                    sekolah, biaya seragam dan
                    buku, dan beasiswa penunjang pendidikan dalam waktu satu tahun.</p>
            </div>
            <div class="flex justify-center items-center">
                <button
                    @click="activePage = null; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                    class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-center items-center">
                    &laquo; Kembali
                </button>
            </div>


        </div>

        {{-- 2. Kesehatan Sub-Page --}}
        <div x-show="activePage === 'b'" class="my-4 p-4 bg-white rounded-md justify-items-center">
            <!--  Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes1.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes5.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>


                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes6.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes7.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/s/kes8.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

            </div>

            <div class="bg-teal-500/20 shadow-lg rounded-lg px-4 py-8 mb-4">
                <h2 class="text-xl font-bold text-center">Program Kesehatan:</h2>
                <p class="text-center">Program membantu kesehatan mustahik seperti biaya berobat, biaya tanggungan
                    rumah
                    sakit, dan biaya pelunasan BPJS dalam kurun waktu satu tahun.</p>
            </div>
            <div class="flex justify-center items-center">
                <button
                    @click="activePage = null; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                    class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-center items-center">
                    &laquo; Kembali
                </button>
            </div>

        </div>

        {{-- 3. Kemanusiaan Sub-Page --}}
        <div x-show="activePage === 'c'" class="my-4 p-4 bg-white rounded-md justify-items-center">
            <!--  Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/m/kem1.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem7.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/m/kem3.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>


                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem10.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem5.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/m/kem6.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem7.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem15.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem9.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem11.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem12.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem11.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem13.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem14.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/m/kem8.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>


            </div>

            <div class="bg-teal-500/20 shadow rounded-lg px-4 py-8 mb-4">
                <h2 class="text-xl font-bold text-center">Program Kemanusiaan:</h2>
                <p class="text-center">Program membantu biaya hidup mustahik yang membutuhkan seperti biaya bertahan
                    hidup,
                    biaya perjalanan, dan bantuan makanan.</p>
            </div>
            <div class="flex justify-center items-center">
                <button
                    @click="activePage = null; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                    class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-center items-center">
                    &laquo; Kembali
                </button>
            </div>


        </div>

        {{-- 4. Ekonomi Sub-Page --}}
        <div x-show="activePage === 'd'" class="my-4 p-4 bg-white rounded-md justify-items-center">

            <!--  Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko2.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko1.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko6.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko4.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko5.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko7.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko9.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko10.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko11.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko12.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/eko8.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <div class="bg-teal-500/20 w-full rounded-lg px-4 py-8 mb-4 shadow-lg">
                <h2 class="text-xl font-bold text-center">Program Ekonomi:</h2>
                <p class="text-center">Program pemberian modal untuk kegiatan usaha UMKM mustahik.</p>
            </div>
            <div class="flex justify-center items-center">
                <button
                    @click="activePage = null; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                    class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-center items-center">
                    &laquo; Kembali
                </button>
            </div>


        </div>

        {{-- 5. Dakwah Sub-Page --}}
        <div x-show="activePage === 'e'" class="my-4 p-4 bg-white rounded-md justify-items-center">

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak1.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/dak2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/dak3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/dak4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak5.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak6.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak7.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak8.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak9.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak10.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak15.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak12.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak13.PNG" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak14.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center md:col-span-2">
                    <div class="bg-white p-2 rounded-lg shadow flex justify-center items-center">
                        <img src="/img/d/dak11.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <div class="bg-teal-500/20 shadow rounded-lg px-4 py-8 mb-4">
                <h2 class="text-xl font-bold text-center">Program Dakwah:</h2>
                <p class="text-center">Program bantuan kepada fisabilillah yang sedang berjuang dalam syiar dakwah
                    islam
                    dan membutuhkan support tambahan berupa dana.</p>
            </div>
            <div class="flex justify-center items-center">
                <button
                    @click="activePage = null; document.getElementById('program').scrollIntoView({ behavior: 'smooth' })"
                    class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-center items-center">
                    &laquo; Kembali
                </button>
            </div>

        </div>
    </div>
    {{-- Program Section End --}}

</x-layout>
