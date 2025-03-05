<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Tabel Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 mt-4 mb-6 drop-shadow-md">Tabel Zakat
        </h2>
    </div>
    <div class="min-h-[150px] items-center">
        <div
            class="relative w-full min-h-[200px] md:h-max flex items-center justify-center overflow-hidden rounded-lg shadow bg-gray-100">
            <img src="/img/tabel1.png" alt="Contact" class="hidden lg:block w-full h-max object-cover md:object-contain">
            <img src="/img/tabel3.png" alt="Contact" class="lg:hidden w-full h-max object-cover md:object-contain">
            <div class="absolute inset-0 rounded-lg"></div>
        </div>
    </div>
    {{-- Tabel Section End --}}

    {{-- Capaian Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 my-4 drop-shadow-md">Capaian Kami
        </h2>
    </div>
    <div class="grid md:grid-cols-3 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/home1.png');">
            <div class="content-center rounded-lg text-center justify-center items-center bg-teal-300/80 h-80 md:h-64">
                <h2 class="text-3xl drop-shadow-md"><strong>Sebanyak 1.700 Orang</strong></h2>
                <p class="text-xl drop-shadow-md"><strong>Jumlah Muzzaki & Munfiq</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/home2.png');">
            <div class="content-center rounded-lg text-center justify-center items-center bg-teal-300/80 h-80 md:h-64">
                <h2 class="text-2xl md:text-3xl drop-shadow-md"><strong>Sebanyak 27.323 Orang</strong></h2>
                <p class="text-xl drop-shadow-md"><strong>Jumlah Mustahik</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/mitra.png');">
            <div class="content-center rounded-lg text-center justify-center items-center bg-teal-300/80 h-80 md:h-64">
                <h2 class="text-3xl drop-shadow-md"><strong>Lebih dari 20</strong></h2>
                <p class="text-xl drop-shadow-md"><strong>Jumlah Mitra</strong></p>
            </div>
        </div>
    </div>
    {{-- Capaian Section End --}}

    {{-- Hubungi Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 my-4 drop-shadow-md">
            Hubungi Kami
        </h2>
    </div>
    <div class="grid md:grid-cols-2 my-4 gap-4 items-stretch py-4">
        <div
            class="relative w-full min-h-[200px] md:h-80 flex items-center justify-center overflow-hidden rounded-lg shadow bg-gray-100">
            <img src="/img/contact.png" alt="Contact" class="w-full h-full object-cover md:object-contain">
            <div class="absolute inset-0 bg-teal-500/20 rounded-lg"></div>
        </div>

        <div class="rounded-lg px-4 flex flex-col justify-center min-h-[150px] md:h-80 py-6">
            <h2 class="text-lg font-bold my-2">Silahkan hubungi kami untuk informasi lebih lanjut.</h2>
            <a href="http://wa.me/6285349688826" target="_blank"
                class="flex bg-teal-800 p-4 px-6 rounded-xl font-bold text-gray-200 hover:bg-teal-600 ease-in-out duration-200 active:bg-teal-900 drop-shadow-lg">
                <svg class="size-6 self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
                &nbsp; <p class="my-2 mx-4"><strong>Admin Swara </strong>Via WhatsApp</p>
                <p class="my-2">+62 853 4968 8826</p>
            </a>
        </div>
    </div>
    {{-- Hubungi Section End --}}

    <!-- Mitra Perusahaan Section Start -->
    <div class="relative my-8 bg-white rounded-lg py-6 px-2 shadow-lg">
        <!-- Title -->
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 drop-shadow-md">
            Mitra Perusahaan
        </h2>

        <!-- Carousel Wrapper with Padding for Buttons -->
        <div class="relative mt-4 flex items-center justify-center h-64 px-10">
            <!-- Tombol Navigasi (di luar embla agar tetap di pinggir) -->
            <button
                class="prev-btn-2 absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800/50 text-white p-3 rounded-full z-10 text-center">
                &laquo;
            </button>

            <div class="embla embla-2 overflow-hidden w-full">
                <div class="embla__viewport">
                    <div class="embla__container flex">
                        <div class="embla__slide min-w-full flex items-center justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <img src="img/mp/mp6.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 1">
                                <img src="img/mp/mp7.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 2">
                                <img src="img/mp/mp8.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 3">
                                <img src="img/mp/mp4.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 4">
                            </div>
                        </div>
                        <div class="embla__slide min-w-full flex items-center justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <img src="img/mp/mp2.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 5">
                                <img src="img/mp/mp5.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 7">
                                <img src="img/mp/mp3.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 8">
                                <img src="img/mp/mp9.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Company 9">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi (di luar embla agar tetap di pinggir) -->
            <button
                class="next-btn-2 absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800/50 text-white p-3 rounded-full z-10 text-center">
                &raquo;
            </button>
        </div>

        <!-- Dots Indicator -->
        <div class="dots-container-2 absolute bottom-2 left-1/2 -translate-x-1/2 flex justify-center space-x-2"></div>
    </div>
    <!-- Mitra Perusahaan Section End -->

    <!-- Mitra Yayasan Section Start -->
    <div class="relative my-8 bg-white rounded-lg py-6 px-2 shadow-lg">
        <!-- Title -->
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 drop-shadow-md">
            Mitra Yayasan
        </h2>

        <!-- Carousel Wrapper with Padding for Buttons -->
        <div class="relative mt-4 flex items-center justify-center h-64 px-10">
            <!-- Tombol Navigasi (di luar embla agar tetap di pinggir) -->
            <button
                class="prev-btn-3 absolute left-0 top-1/2 -translate-y-1/2 bg-gray-800/50 text-white p-3 rounded-full z-10 text-center">
                &laquo;
            </button>

            <div class="embla embla-3 overflow-hidden w-full">
                <div class="embla__viewport">
                    <div class="embla__container flex">
                        <div class="embla__slide min-w-full flex items-center justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <img src="img/my/my12.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 1">
                                <img src="img/my/my8.jpeg" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 3">
                                <img src="img/my/my16.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 4">
                                <img src="img/my/my1.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 5">
                            </div>
                        </div>
                        <div class="embla__slide min-w-full flex items-center justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <img src="img/my/my9.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 2">
                                <img src="img/my/my4.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 8">
                                <img src="img/my/my3.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 7">
                                <img src="img/my/my2.jpg" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 6">
                            </div>
                        </div>
                        <div class="embla__slide min-w-full flex items-center justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                                <img src="img/my/my15.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 5">
                                <img src="img/my/my6.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 6">
                                <img src="img/my/my5.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 7">
                                <img src="img/my/my7.jpeg" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 8">
                            </div>
                        </div>
                        <div class="embla__slide min-w-full flex items-center justify-center">
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                                <img src="img/my/my11.jpeg" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 5">
                                <img src="img/my/my17.png" class="h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 6">
                                <img src="img/my/my14.jpeg"
                                    class="col-span-2 md:col-span-1 h-24 md:h-32 w-auto object-contain mx-auto"
                                    alt="Foundation 8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi (di luar embla agar tetap di pinggir) -->
            <button
                class="next-btn-3 absolute right-0 top-1/2 -translate-y-1/2 bg-gray-800/50 text-white p-3 rounded-full z-10 text-center">
                &raquo;
            </button>
        </div>

        <!-- Dots Indicator -->
        <div class="dots-container-3 absolute bottom-2 left-1/2 -translate-x-1/2 flex justify-center space-x-2"></div>
    </div>
    <!-- Mitra Yayasan Section End -->

</x-layout>
