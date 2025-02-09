<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Program Section Start --}}
    {{-- <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 my-4 drop-shadow-md">5 Program Utama
        </h2>
    </div>
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/program1.png');">
            <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-xl drop-shadow-md"><strong>PENDIDIKAN</strong></h2>
                <p class="text-lg drop-shadow-md">Lorem, ipsum. <strong>Lorem, ipsum.</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-top rounded-lg shadow w-full items-center"
            style="background-image: url('/img/program2.png');">
            <div class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-2xl md:text-xl drop-shadow-md"><strong>KESEHATAN</strong></h2>
                <p class="text-lg drop-shadow-md">Lorem, ipsum. <strong>Lorem, ipsum.</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/program3.jpeg');">
            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-xl drop-shadow-md"><strong>KEMANUSIAAN</strong></h2>
                <p class="text-lg drop-shadow-md">Lorem, ipsum. <strong>Lorem, ipsum.</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/home2.png');">
            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-xl drop-shadow-md"><strong>EKONOMI</strong></h2>
                <p class="text-lg drop-shadow-md">Lorem, ipsum. <strong>Lorem, ipsum.</strong></p>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/program5.png');">

            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-xl drop-shadow-md"><strong>DAKWAH</strong></h2>
                <p class="text-lg drop-shadow-md">Lorem, ipsum. <strong>Lorem, ipsum.</strong></p>
            </div>
        </div>
    </div> --}}
    {{-- Program Section End --}}

    {{-- <div x-data="{ showSection: false }">
        <button @click="showSection = !showSection"
            class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">
            Toggle Section
        </button>

        <div x-show="showSection" class="mt-4 p-4 bg-gray-200 rounded-md transition-all">
            <p>This is the hidden section! 🎉 Click the button again to hide it.</p>
        </div>
    </div> --}}

    {{-- Program Section Start --}}
    <div x-data="{ activePage: null }">
        <!-- Buttons -->
        <div x-show="activePage === null"
            class="grid md:grid-cols-2 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
            <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program1.png');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-xl drop-shadow-md mb-2"><strong>PENDIDIKAN</strong></h2>
                    <button @click="activePage = 'a'"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &#129138;
                    </button>
                </div>
            </div>
            <div class="bg-cover bg-top rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program2.png');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-xl drop-shadow-md mb-2"><strong>KESEHATAN</strong></h2>
                    <button @click="activePage = 'b'"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &#129138;
                    </button>
                </div>
            </div>
            <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                style="background-image: url('/img/program3.jpeg');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-xl drop-shadow-md mb-2"><strong>KEMANUSIAAN</strong></h2>
                    <button @click="activePage = 'c'"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &#129138;
                    </button>
                </div>
            </div>
            <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                style="background-image: url('/img/home2.png');">
                <div
                    class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                    <h2 class="text-2xl md:text-xl drop-shadow-md mb-2"><strong>EKONOMI</strong></h2>
                    <button @click="activePage = 'd'"
                        class="px-4 py-2 bg-teal-800/70 text-white rounded-md hover:bg-teal-600 active:bg-teal-900 ease-in-out duration-200">
                        Lihat Program &#129138;
                    </button>
                </div>
            </div>
            <div class="col-span-2 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
                <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
                    style="background-image: url('/img/program5.png');">

                    <div
                        class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                        <h2 class="text-2xl md:text-xl drop-shadow-md mb-2"><strong>DAKWAH</strong></h2>
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
                        <img src="/img/p1/p3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p1/p5.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Full-width image spanning 2 columns on md+ screens -->
                <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center md:col-span-2">
                    <div class="bg-cover bg-no-repeat bg-center rounded-lg h-96 w-full"
                        style="background-image: url('/img/p1/p4.JPG');">
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
            <!-- First Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p2/p5.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p2/p2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p2/p1.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <!-- Second Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p2/p3.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p2/p4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
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
            <!-- First Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <!-- First Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Second Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Third Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p7.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <!-- Second Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p4.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p11.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Kemanusiaan:</h2>
            <p class="text-center">Program membantu biaya hidup mustahik yang membutuhkan seperti biaya bertahan hidup,
                biaya perjalanan, dan bantuan makanan.</p>
            <button @click="activePage = null"
                class="my-4 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>

            <!-- Third Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p1.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p6.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p10.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>


            <!-- Fourth Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <!-- First Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p5.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Second Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p8.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Third Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p3/p9.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>
        </div>

        {{-- 4. Ekonomi Sub-Page --}}
        <div x-show="activePage === 'd'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">

            <!-- First Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <!-- First Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p1.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Second Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p6.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Third Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p8.jpeg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <!-- Second Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <!-- First Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p2.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Second Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p5.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Third Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p3.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

            <h2 class="text-xl font-bold text-center">Program Ekonomi:</h2>
            <p class="text-center">Program pemberian modal untuk kegiatan usaha UMKM mustahik. </p>
            <button @click="activePage = null"
                class="my-4 px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-500 ease-in-out duration-200 justify-self-center">&#129136;
                Kembali</button>

            <!-- Third Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p4.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p4/p7.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>
            </div>

        </div>







        {{-- 5. Dakwah Sub-Page --}}
        <div x-show="activePage === 'e'" class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center">
            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-4">
                <!-- First Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p5/p4.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Second Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p5/p5.png" alt="Image" class="max-h-[500px] w-auto object-contain">
                    </div>
                </div>

                <!-- Third Image -->
                <div class="flex justify-center items-center">
                    <div class="bg-white p-2 rounded-lg shadow-lg flex justify-center items-center">
                        <img src="/img/p5/p3.jpg" alt="Image" class="max-h-[500px] w-auto object-contain">
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
    </div>
    {{-- Program Section End --}}


    {{-- <div class="grid md:grid-cols-2 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Pendidikan</h2>
            <div class="text-base text-gray-500">
                <a href="#">Program Pendidikan</a> | 1 Januari 2025
            </div>
            <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, voluptate.
                Repellat non dolore quidem numquam delectus magni? Quis, mollitia quos? Laudantium totam impedit nostrum
                exercitationem?</p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Kesehatan</h2>
            <div class="text-base text-gray-500">
                <a href="#">Program Kesehatan</a> | 1 Januari 2025
            </div>
            <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid esse sint, iste
                facilis soluta voluptatibus voluptatum? Fugiat nostrum commodi aspernatur, quaerat ea iure consequatur
                esse!
            </p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Kemanusiaan</h2>
            <div class="text-base text-gray-500">
                <a href="#">Program Kemanusiaan</a> | 1 Januari 2025
            </div>
            <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, recusandae facilis?
                Obcaecati fugit, inventore accusantium commodi modi ipsa, voluptatum hic dolorum quia non quaerat ullam.
            </p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Ekonomi</h2>
            <div class="text-base text-gray-500">
                <a href="#">Program Ekonomi</a> | 1 Januari 2025
            </div>
            <p class="my-4 font-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore delectus aliquid
                ipsa dolorum maxime eum libero, distinctio assumenda, ratione iste quis porro nemo pariatur dolores.</p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">Dakwah</h2>
            <div class="text-base text-gray-500">
                <a href="#">Program Dakwah</a> | 1 Januari 2025
            </div>
            <p class="my-4 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error facere dolores
                obcaecati necessitatibus adipisci possimus reiciendis deserunt, labore odio consectetur cum odit nam
                saepe
                quibusdam.</p>
            <a href="#" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    </div> --}}

</x-layout>
