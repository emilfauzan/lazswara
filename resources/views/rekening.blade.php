<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Sub-Title Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 mb-6 drop-shadow-md">Rekening Lengkap
            Kami</h2>
    </div>
    {{-- Sub-Title Section End --}}

    {{-- Banner Setion Start --}}
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/laporan.png');">

            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64 px-8">
                <h2 class="text-xl drop-shadow-md">Mari bersama<strong> WUJUDKAN KEMANDIRIAN UMMAT</strong> di Kabupaten Kutai Timur.</h2>
            </div>
        </div>
    </div>
    {{-- Banner Setion End --}}

    {{-- Rekening Mobile Section Start --}}
    {{-- Rekening Zakat --}}
    <div class="grid lg:grid-cols-1 my-4 break-words lg:break-normal items-stretch gap-4 lg:hidden">
        <div class="content-center rounded-lg justify-center items-center bg-teal-600/60 px-8 py-4">
            <ul>
                <li>
                    <p class="text-lg drop-shadow-md"><strong>
                            1. Rekening Zakat &#x1F87E;
                        </strong></p>
                </li>
            </ul>
        </div>
        <div class="content-center rounded-lg justify-center items-center px-2 py-4">
            <div class="grid grid-cols-2 gap-2 mx-2 my-2 mb-4">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center"
                    style="background-image: url('/img/rekening.png');">
                </div>
                <div class="mx-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n Y Swara MU Zakat</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-8">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>72 9593 1463</p>
                </div>
                <button rz1-copy
                    class="copyButton px-4 py-2 justify-center text-center rounded-lg border-2 border-teal-700/50 cursor-pointer bg-gray-200 hover:bg-gray-300 flex gap-1">
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z" />
                    </svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
                <!-- QRIS Button Start -->
                <div x-data="{ z2: false }" @keydown.escape.window="z2 = false"
                    class="justify-self-center border-2 border-teal-700/50 rounded-lg items-stretch">
                    <button @click="z2 = true"
                        class="block items-stretch text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer gap-1 place-items-center md:flex">
                        <svg class="size-5 self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M0 80C0 53.5 21.5 32 48 32l96 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-96 0c-26.5 0-48-21.5-48-48L0 80zM64 96l0 64 64 0 0-64L64 96zM0 336c0-26.5 21.5-48 48-48l96 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-96 0c-26.5 0-48-21.5-48-48l0-96zm64 16l0 64 64 0 0-64-64 0zM304 32l96 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-96 0c-26.5 0-48-21.5-48-48l0-96c0-26.5 21.5-48 48-48zm80 64l-64 0 0 64 64 0 0-64zM256 304c0-8.8 7.2-16 16-16l64 0c8.8 0 16 7.2 16 16s7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16l0 96c0 8.8-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-160zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                        </svg>
                        <strong>QRIS</strong>
                    </button>
                    <!-- Modal -->
                    <div x-show="z2"
                        class="fixed inset-0 z-10 flex items-center justify-self-center overflow-y-auto">
                        <!-- Background Overlay (Click outside to close) -->
                        <div class="fixed inset-0 bg-gray-500/75 transition-opacity ease-out duration-300"
                            x-show="z2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="z2 = false">
                        </div>
                        <!-- Modal Content -->
                        <div class="relative bg-white rounded-lg shadow-xl p-6 sm:w-full sm:max-w-lg transition-all"
                            x-show="z2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <h3 class="text-lg text-center font-semibold text-gray-900">
                                QRIS Rekening Zakat - Bank
                                Syariah Indonesia
                            </h3>
                            <div class="w-auto h-96 bg-contain bg-fit bg-center bg-no-repeat"
                                style="background-image: url('/img/qz2.jpeg');">
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Dapat langsung scan atau unduh gambar.
                            </p>
                            <div class="mt-4 flex justify-end">
                                <button @click="z2 = false"
                                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Batal</button>
                                <button
                                    class="unduhz2Button ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">
                                    Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- QRIS Button End -->
            </div>
        </div>
    </div>
    {{-- Rekening Infaq --}}
    <div class="grid lg:grid-cols-1 my-4 break-words lg:break-normal items-stretch gap-4 lg:hidden">
        <div class="content-center rounded-lg justify-center items-center bg-teal-600/60 px-8 py-4">
            <ul>
                <li>
                    <p class="text-lg drop-shadow-md"><strong>
                            2. Rekening Infaq &#x1F87E;
                        </strong></p>
                </li>
            </ul>
        </div>
        <div class="content-center rounded-lg justify-center items-center px-2 py-4">
            <div class="grid grid-cols-2 gap-2 mx-2 my-2 mb-4">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center"
                    style="background-image: url('/img/rekening.png');">
                </div>
                <div class="mx-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n Y Swara MU Infaq</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-8">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>72 9593 1412</p>
                </div>
                <button ri2-copy
                    class="copyButton px-4 py-2 justify-center text-center rounded-lg border-2 border-teal-700/50 cursor-pointer bg-gray-200 hover:bg-gray-300 flex gap-1">
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z" />
                    </svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
                <!-- QRIS Button Start -->
                <div x-data="{ i2: false }" @keydown.escape.window="i2 = false"
                    class="justify-self-center border-2 border-teal-700/50 rounded-lg items-stretch">
                    <button @click="i2 = true"
                        class="block items-stretch text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer gap-1 place-items-center md:flex">
                        <svg class="size-5 self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                                d="M0 80C0 53.5 21.5 32 48 32l96 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-96 0c-26.5 0-48-21.5-48-48L0 80zM64 96l0 64 64 0 0-64L64 96zM0 336c0-26.5 21.5-48 48-48l96 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-96 0c-26.5 0-48-21.5-48-48l0-96zm64 16l0 64 64 0 0-64-64 0zM304 32l96 0c26.5 0 48 21.5 48 48l0 96c0 26.5-21.5 48-48 48l-96 0c-26.5 0-48-21.5-48-48l0-96c0-26.5 21.5-48 48-48zm80 64l-64 0 0 64 64 0 0-64zM256 304c0-8.8 7.2-16 16-16l64 0c8.8 0 16 7.2 16 16s7.2 16 16 16l32 0c8.8 0 16-7.2 16-16s7.2-16 16-16s16 7.2 16 16l0 96c0 8.8-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s-7.2-16-16-16s-16 7.2-16 16l0 64c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-160zM368 480a16 16 0 1 1 0-32 16 16 0 1 1 0 32zm64 0a16 16 0 1 1 0-32 16 16 0 1 1 0 32z" />
                        </svg>
                        <strong>QRIS</strong>
                    </button>
                    <!-- Modal -->
                    <div x-show="i2"
                        class="fixed inset-0 z-10 flex items-center justify-self-center overflow-y-auto">
                        <!-- Background Overlay (Click outside to close) -->
                        <div class="fixed inset-0 bg-gray-500/75 transition-opacity ease-out duration-300"
                            x-show="i2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="i2 = false">
                        </div>
                        <!-- Modal Content -->
                        <div class="relative bg-white rounded-lg shadow-xl p-6 sm:w-full sm:max-w-lg transition-all"
                            x-show="i2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <h3 class="text-lg text-center font-semibold text-gray-900">
                                QRIS Rekening Infaq - Bank
                                Syariah Indonesia
                            </h3>
                            <div class="w-auto h-96 bg-contain bg-fit bg-center bg-no-repeat"
                                style="background-image: url('/img/qi2.jpeg');">
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Dapat langsung scan atau unduh gambar.
                            </p>
                            <div class="mt-4 flex justify-end">
                                <button @click="i2 = false"
                                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Batal</button>
                                <button id="unduhi2Button"
                                    class="ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Unduh</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- QRIS Button End -->
            </div>
            <div class="border-b-2">
            </div>
            <div class="grid grid-cols-2 gap-2 mx-2 mb-4 mt-8">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center"
                    style="background-image: url('/img/rekening3.png');">
                </div>
                <div class="mx-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n Yayasan Swara Mandiri Ummat</p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2 mx-2 my-2 mb-6">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>0563010 0190 4562</p>
                </div>
                <button ri1-copy
                    class="copyButton px-4 py-2 justify-center text-center rounded-lg border-2 border-teal-700/50 cursor-pointer bg-gray-200 hover:bg-gray-300 flex gap-1">
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z" />
                    </svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
            </div>
        </div>
    </div>
    {{-- Rekening Mobile Section End --}}

    {{--  --}}

    {{-- Rekening Zakat Section Start --}}
    <div class="lg:grid-cols-1 my-4 break-words lg:break-normal items-stretch gap-4 hidden lg:block">
        <div class="content-center rounded-lg justify-center items-center bg-teal-600/60 px-8 py-4">
            <ul>
                <li>
                    <p class="text-lg drop-shadow-md"><strong>
                            1. Rekening Zakat &#x1F87E;
                        </strong></p>
                </li>
            </ul>
        </div>
        <div class="content-center rounded-lg justify-center items-center px-2 py-4">
            <div class="grid grid-cols-10 gap-2 mx-2 my-2 mb-6">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center col-span-2"
                    style="background-image: url('/img/rekening.png');">
                </div>
                <div class="mx-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n Y Swara MU Zakat</p>
                </div>
                <div
                    class="mx-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>72 9593 1463</p>
                </div>
                <div class="justify-items-center self-center">
                    <button rz1-copy
                        class="copyButton px-4 py-2 text-center rounded-lg border-2 border-teal-700/50 cursor-pointer col-span-2 bg-gray-200 hover:bg-gray-300 flex gap-1">
                        <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z" />
                        </svg>
                        <p class="self-center">
                            Copy
                        </p>
                </div>
                <!-- QRIS Button Start -->
                <div x-data="{ z2: false }" @keydown.escape.window="z2 = false" class="justify-self-center">
                    <button @click="z2 = true"
                        class="content-center text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer border-2 border-teal-700/50">
                        <strong>QRIS</strong>
                    </button>
                    <!-- Modal -->
                    <div x-show="z2"
                        class="fixed inset-0 z-10 flex items-center justify-self-center overflow-y-auto">
                        <!-- Background Overlay (Click outside to close) -->
                        <div class="fixed inset-0 bg-gray-500/75 transition-opacity ease-out duration-300"
                            x-show="z2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="z2 = false">
                        </div>
                        <!-- Modal Content -->
                        <div class="relative bg-white rounded-lg shadow-xl p-6 sm:w-full sm:max-w-lg transition-all"
                            x-show="z2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <h3 class="text-lg text-center font-semibold text-gray-900">
                                QRIS Rekening Zakat - Bank
                                Syariah Indonesia
                            </h3>
                            <div class="w-auto h-96 bg-contain bg-fit bg-center bg-no-repeat"
                                style="background-image: url('/img/qz2.jpeg');">
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Dapat langsung scan atau unduh gambar.
                            </p>
                            <div class="mt-4 flex justify-end">
                                <button @click="z2 = false"
                                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Batal</button>
                                <button
                                    class="unduhz2Button ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">
                                    Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- QRIS Button End -->
            </div>
        </div>
    </div>
    {{-- Rekening Zakat Section End --}}

    {{-- Rekening Infaq Section Start --}}
    <div class="lg:grid-cols-1 my-4 break-words lg:break-normal items-stretch gap-4 hidden lg:block">
        <div class="content-center rounded-lg justify-center items-center bg-teal-600/60 px-8 py-4">
            <ul>
                <li>
                    <p class="text-lg drop-shadow-md"><strong>
                            2. Rekening Infaq &#x1F87E;
                        </strong></p>
                </li>
            </ul>
        </div>
        <div class="content-center rounded-lg justify-center items-center px-2 py-4">
            <div class="grid grid-cols-10 gap-2 mx-2 my-2 mb-3">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center col-span-2"
                    style="background-image: url('/img/rekening.png');">
                </div>
                <div class="mx-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n Y Swara MU Infaq</p>
                </div>
                <div
                    class="mx-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>72 9593 1412</p>
                </div>
                <div class="justify-items-center self-center">
                    <button ri2-copy
                        class="copyButton px-4 py-2 text-center rounded-lg border-2 border-teal-700/50 cursor-pointer col-span-2 bg-gray-200 hover:bg-gray-300 flex gap-1">
                        <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z" />
                        </svg>
                        <p class="self-center">
                            Copy
                        </p>
                </div>
                <!-- QRIS Button Start -->
                <div x-data="{ i2: false }" @keydown.escape.window="i2 = false" class="justify-self-center">
                    <button @click="i2 = true"
                        class="content-center text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer border-2 border-teal-700/50 ">
                        <strong>QRIS</strong>
                    </button>
                    <!-- Modal -->
                    <div x-show="i2"
                        class="fixed inset-0 z-10 flex items-center justify-self-center overflow-y-auto">
                        <!-- Background Overlay (Click outside to close) -->
                        <div class="fixed inset-0 bg-gray-500/75 transition-opacity ease-out duration-300"
                            x-show="i2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click="i2 = false">
                        </div>
                        <!-- Modal Content -->
                        <div class="relative bg-white rounded-lg shadow-xl p-6 sm:w-full sm:max-w-lg transition-all"
                            x-show="i2" x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                            <h3 class="text-lg text-center font-semibold text-gray-900">
                                QRIS Rekening Infaq - Bank
                                Syariah Indonesia
                            </h3>
                            <div class="w-auto h-96 bg-contain bg-fit bg-center bg-no-repeat"
                                style="background-image: url('/img/qi2.jpeg');">
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Dapat langsung scan atau unduh gambar.
                            </p>
                            <div class="mt-4 flex justify-end">
                                <button @click="i2 = false"
                                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Batal</button>
                                <button
                                    class="unduhi2Button ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">
                                    Unduh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- QRIS Button End -->
            </div>

            <div class="border-b-2 pt-2">
            </div>

            <div class="grid grid-cols-10 gap-2 mx-2 my-5 mb-3">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center col-span-2"
                    style="background-image: url('/img/rekening3.png');">
                </div>
                <div class="mx-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n Yayasan Swara Mandiri Ummat</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>0563010 0190 4562</p>
                </div>
                <button ri1-copy
                    class="copyButton px-4 py-2 justify-center text-center rounded-lg border-2 border-teal-700/50 cursor-pointer col-span-2 bg-gray-200 hover:bg-gray-300 flex gap-1">
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z" />
                    </svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
            </div>
        </div>
    </div>
    {{-- Rekening Infaq Section End --}}

    

    <script>
        document.getElementById('unduhi2Button').addEventListener('click', function() {
            const imageUrl = '/img/qi2.jpeg'; // Change to your dynamic image path
            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'QRIS_Infaq_Bank_Syariah_Indonesia.jpeg'; // Set default download name
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        document.querySelectorAll(".unduhz2Button").forEach((button) => {
            button.addEventListener("click", () => {
                const imageUrl = "/img/qz2.jpeg";
                const a = document.createElement("a");
                a.href = imageUrl;
                a.download = "QRIS_Zakat_Bank_Syariah_Indonesia.jpeg";
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            });
        });

        document.querySelectorAll(".unduhi2Button").forEach((button) => {
            button.addEventListener("click", () => {
                const imageUrl = "/img/qi2.jpeg";
                const a = document.createElement("a");
                a.href = imageUrl;
                a.download = "QRIS_Infaq_Bank_Syariah_Indonesia.jpeg";
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            });
        });

        function copyToClipboardFallback(text) {
            const textarea = document.createElement("textarea");
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand("copy");
            document.body.removeChild(textarea);
            showModal();
        }

        function showModal() {
            const modal = document.getElementById("rekcopySuccessModal");
            modal.classList.remove("opacity-0", "pointer-events-none");

            setTimeout(() => {
                modal.classList.add("opacity-0", "pointer-events-none");
            }, 5000);
        }

        // Rekening Zakat 1
        document.querySelectorAll("[rz1-copy]").forEach(button => {
            button.addEventListener("click", function() {
                const text = "7295931463";

                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(text)
                        .then(() => showModal())
                        .catch(err => {
                            console.error("Clipboard Error: ", err);
                            copyToClipboardFallback(text);
                        });
                } else {
                    copyToClipboardFallback(text);
                }
            });
        });

        // Rekening Infaq 1
        document.querySelectorAll("[ri1-copy]").forEach(button => {
            button.addEventListener("click", function() {
                const text = "056301001904562";

                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(text)
                        .then(() => showModal())
                        .catch(err => {
                            console.error("Clipboard Error: ", err);
                            copyToClipboardFallback(text);
                        });
                } else {
                    copyToClipboardFallback(text);
                }
            });
        });

        // Rekening Infaq 2
        document.querySelectorAll("[ri2-copy]").forEach(button => {
            button.addEventListener("click", function() {
                const text = "7295931412";

                if (navigator.clipboard && navigator.clipboard.writeText) {
                    navigator.clipboard.writeText(text)
                        .then(() => showModal())
                        .catch(err => {
                            console.error("Clipboard Error: ", err);
                            copyToClipboardFallback(text);
                        });
                } else {
                    copyToClipboardFallback(text);
                }
            });
        });
    </script>

</x-layout>
