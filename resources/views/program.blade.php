<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Program Section Start --}}
    <div x-data="{ activePage: null }">
        <!-- Buttons -->
        <div x-show="activePage === null"
    class="grid grid-cols-1 md:grid-cols-2 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
    
    <!-- PENDIDIKAN -->
    <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
        style="background-image: url('/img/program1.png');">
        <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
            <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>PENDIDIKAN</strong></h2>
            <button @click="activePage = 'a'"
                class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                Lihat Program &#129138;
            </button>
        </div>
    </div>

    <!-- KESEHATAN -->
    <div class="bg-cover bg-top rounded-lg shadow w-full items-center"
        style="background-image: url('/img/program2.png');">
        <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
            <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>KESEHATAN</strong></h2>
            <button @click="activePage = 'b'"
                class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                Lihat Program &#129138;
            </button>
        </div>
    </div>

    <!-- KEMANUSIAAN -->
    <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
        style="background-image: url('/img/program3.jpeg');">
        <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
            <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>KEMANUSIAAN</strong></h2>
            <button @click="activePage = 'c'"
                class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                Lihat Program &#129138;
            </button>
        </div>
    </div>

    <!-- EKONOMI -->
    <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
        style="background-image: url('/img/program4.jpeg');">
        <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
            <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>EKONOMI</strong></h2>
            <button @click="activePage = 'd'"
                class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                Lihat Program &#129138;
            </button>
        </div>
    </div>

    <!-- DAKWAH (Full Width on Desktop) -->
    <div class="col-span-1 md:col-span-2">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/program5.png');">
            <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-2xl md:text-4xl drop-shadow-md mb-2"><strong>DAKWAH</strong></h2>
                <button @click="activePage = 'e'"
                    class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                    Lihat Program &#129138;
                </button>
            </div>
        </div>
    </div>

</div>


        <!-- Sub-Pages -->
        {{-- 1. Pendidikan Sub-Page --}}
        <div x-show="activePage === 'a'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">
            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p/p1.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p/p2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p/p3.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p/p4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Pendidikan:</h2>
            <p class="text-center">Program membantu meringankan biaya pendidikan mustahik seperti pelunasan biaya
                sekolah, biaya seragam dan
                buku, dan beasiswa penunjang pendidikan dalam waktu satu tahun.</p>
            <button @click="activePage = null"
                class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>
        </div>

        {{-- 2. Kesehatan Sub-Page --}}
        <div x-show="activePage === 'b'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">
            <!--  Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/s/s1.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/s/s2.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/s/s3.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/s/s4.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Kesehatan:</h2>
            <p class="text-center">Program membantu kesehatan mustahik seperti biaya berobat, biaya tanggungan rumah
                sakit, dan biaya pelunasan BPJS dalam kurun waktu satu tahun.</p>
            <button @click="activePage = null"
                class="mt-2 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>
        </div>

        {{-- 3. Kemanusiaan Sub-Page --}}
        <div x-show="activePage === 'c'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">
            <!--  Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/m/k1.PNG" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/m/k2.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Full-width image spanning 2 columns on md+ screens -->
                <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center md:col-span-2">
                    <div class="bg-cover bg-no-repeat bg-center rounded-lg h-96 w-full"
                        style="background-image: url('/img/m/k4.png');">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Kemanusiaan:</h2>
            <p class="text-center">Program membantu biaya hidup mustahik yang membutuhkan seperti biaya bertahan hidup,
                biaya perjalanan, dan bantuan makanan.</p>
            <button @click="activePage = null"
                class="my-4 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>

        </div>

        {{-- 4. Ekonomi Sub-Page --}}
        <div x-show="activePage === 'd'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">

            <!--  Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/e3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/e/e2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Full-width image spanning 2 columns on md+ screens -->
                <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center md:col-span-2">
                    <div class="bg-cover bg-no-repeat bg-center rounded-lg h-96 w-full"
                        style="background-image: url('/img/e/e1.png');">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Ekonomi:</h2>
            <p class="text-center">Program pemberian modal untuk kegiatan usaha UMKM mustahik. </p>
            <button @click="activePage = null"
                class="my-4 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>

        </div>

        {{-- 5. Dakwah Sub-Page --}}
        <div x-show="activePage === 'e'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/d1.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/d2.JPG" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/d3.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/d/d4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Dakwah:</h2>
            <p class="text-center">Program bantuan kepada fisabilillah yang sedang berjuang dalam syiar dakwah islam
                dan membutuhkan support tambahan berupa dana.</p>
            <button @click="activePage = null"
                class="my-4 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>
        </div>
    </div>
    {{-- Program Section End --}}

</x-layout>
