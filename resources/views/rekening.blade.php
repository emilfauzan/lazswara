<x-layout>
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
                <h2 class="text-xl drop-shadow-md"><strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Quibusdam magnam omnis delectus.</strong></h2>
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
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z"/></svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
                <!-- QRIS Button Start -->
                <div x-data="{ z2: false }" @keydown.escape.window="z2 = false" class="justify-self-center border-2 border-teal-700/50 rounded-lg items-stretch">
                    <button @click="z2 = true"
                        class="block items-stretch text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer gap-1 place-items-center md:flex">
                        <svg class="size-5 self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
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
                                <button id="unduhz2Button"
                                    class="ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Unduh</button>
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
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z"/></svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
                <!-- QRIS Button Start -->
                <div x-data="{ i2: false }" @keydown.escape.window="i2 = false" class="justify-self-center border-2 border-teal-700/50 rounded-lg items-stretch">
                    <button @click="i2 = true"
                        class="block items-stretch text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer gap-1 place-items-center md:flex">
                        <svg class="size-5 self-center" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
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
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z"/></svg>
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
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z"/></svg>
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
                                <button id="unduhz2Button"
                                    class="ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Unduh</button>
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
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z"/></svg>
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
                                <button id="unduhi2Button"
                                    class="ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Unduh</button>
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
                    <svg class="size-5 self-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M384 336l-192 0c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l140.1 0L400 115.9 400 320c0 8.8-7.2 16-16 16zM192 384l192 0c35.3 0 64-28.7 64-64l0-204.1c0-12.7-5.1-24.9-14.1-33.9L366.1 14.1c-9-9-21.2-14.1-33.9-14.1L192 0c-35.3 0-64 28.7-64 64l0 256c0 35.3 28.7 64 64 64zM64 128c-35.3 0-64 28.7-64 64L0 448c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-32-48 0 0 32c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256c0-8.8 7.2-16 16-16l32 0 0-48-32 0z"/></svg>
                    <p class="self-center">
                        Copy
                    </p>
                </button>
            </div>
        </div>
    </div>
    {{-- Rekening Infaq Section End --}}

    <div class="embla overflow-hidden">
        <div class="embla__container flex items-center">
            <div class="embla__slide select-none min-w-full">
                {{-- <div class="bg-cover bg-center shadow md:my-24 my-0" style="background-image: url('img/20.png')">
                    <div class="bg-teal-500/60">
                        <div class="grid md:grid-cols-2">
                            <div class="md:hidden place-self-center">
                                <img class="size-64 drop-shadow-[0_5px_5px_rgba(255,255,255,0.5)]"
                                    src="{{ asset('img/logotransparentsqr.png') }}" alt="">
                            </div>
                            <div
                                class="content-center md:justify-items-start justify-items-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 hover:cursor-default">
                                <h1
                                    class="text-4xl text-center md:text-start font-bold tracking-wider text-gray-200 mb-6 drop-shadow-md">
                                    Bersama Mandirikan Ummat</h1>
                                <p class="text-xs mb-6 text-gray-200 drop-shadow-md hover:cursor-default">lazswara.org
                                </p>
                                <a href="http://wa.me/6285349688826" target="_blank"
                                    class="flex bg-teal-800 p-4 px-6 rounded-xl font-bold text-gray-200 hover:bg-teal-600 ease-in-out duration-200 active:bg-teal-900 drop-shadow-lg">
                                    <svg class="size-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                        <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                    </svg>
                                    &nbsp; Hubungi Kami
                                </a>
                            </div>
                            <div class="hidden md:block place-self-center">
                                <img class="size-64 drop-shadow-[0_5px_5px_rgba(255,255,255,0.5)]"
                                    src="{{ asset('img/logotransparentsqr.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="relative w-full aspect-[1/1] md:aspect-[16/9] bg-cover bg-center bg-no-repeat"
                    style="background-image: url('{{ asset('img/herobg.png') }}')">
                    <div class="absolute inset-0 bg-teal-500/50 backdrop-blur-sm flex items-center">
                        <div class="grid md:grid-cols-2 w-full max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">

                            <!-- Mobile Logo (Visible on Small Screens) -->
                            <div class="md:hidden place-self-center">
                                <img class="w-32 sm:w-48 drop-shadow-[0_5px_5px_rgba(255,255,255,0.5)]"
                                    src="{{ asset('img/logotransparentsqr.png') }}" alt="">
                            </div>

                            <!-- Content -->
                            <div class="text-center md:text-left flex flex-col justify-center max-w-lg mx-auto">
                                <h1
                                    class="text-4xl md:text-5xl font-bold tracking-wider text-gray-200 mb-6 drop-shadow-md">
                                    Bersama Mandirikan Ummat
                                </h1>
                                <p class="text-sm md:text-base text-gray-200 drop-shadow-md hover:cursor-default mb-6">
                                    lazswara.org
                                </p>
                                <a href="http://wa.me/6285349688826" target="_blank"
                                    class="flex justify-center md:justify-start items-center bg-teal-800 px-6 py-4 rounded-xl font-bold text-gray-200 hover:bg-teal-600 transition duration-200 active:bg-teal-900 drop-shadow-lg">
                                    <svg class="size-6 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                    </svg>
                                    Hubungi Kami
                                </a>
                            </div>

                            <!-- Desktop Logo (Only Visible on Large Screens) -->
                            <div class="hidden md:block place-self-center">
                                <img class="w-48 lg:w-64 drop-shadow-[0_5px_5px_rgba(255,255,255,0.5)]"
                                    src="{{ asset('img/logotransparentsqr.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="embla__slide min-w-full">
                <img src="/img/hero2.jpg" class="w-full rounded-lg" alt="Image 2">
            </div>
            <div class="embla__slide min-w-full">
                <img src="/img/hero3.jpg" class="w-full rounded-lg" alt="Image 3">
            </div>
        </div>
    </div>

    <!-- Companies Carousel -->
    <div class="embla overflow-hidden">
        <div class="embla__viewport">
            <div class="embla__container flex grid-cols-2 md:grid-cols-4 gap-4 items-center">
                <!-- Example Logos -->
                <div class="embla__slide">
                    <img src="img/mp/mp1.png" class="object-contain w-full h-auto" alt="Company 1">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp2.png" class="object-contain w-full h-auto" alt="Company 2">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp3.png" class="object-contain w-full h-auto" alt="Company 3">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp4.png" class="object-contain w-full h-auto" alt="Company 4">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp5.png" class="object-contain w-full h-auto" alt="Company 5">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp6.png" class="object-contain w-full h-auto" alt="Company 6">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp7.png" class="object-contain w-full h-auto" alt="Company 7">
                </div>
                <div class="embla__slide">
                    <img src="img/mp/mp8.png" class="object-contain w-full h-auto" alt="Company 8">
                </div>
            </div>
        </div>
    </div>

    <!-- Foundations Carousel -->
    <div class="embla overflow-hidden">
        <div class="embla__viewport">
            <div class="embla__container flex grid-cols-2 md:grid-cols-4 gap-4 items-center">
                <!-- Example Logos -->
                <div class="embla__slide">
                    <img src="img/my/my1.png" class="object-contain w-full h-auto" alt="Foundation 1">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my2.jpg" class="object-contain w-full h-auto" alt="Foundation 2">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my3.png" class="object-contain w-full h-auto" alt="Foundation 3">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my4.png" class="object-contain w-full h-auto" alt="Foundation 4">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my5.png" class="object-contain w-full h-auto" alt="Foundation 5">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my6.png" class="object-contain w-full h-auto" alt="Foundation 6">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my7.jpeg" class="object-contain w-full h-auto" alt="Foundation 7">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my8.jpeg" class="object-contain w-full h-auto" alt="Foundation 8">
                </div>
                <div class="embla__slide">
                    <img src="img/my/my9.png" class="object-contain w-full h-auto" alt="Foundation 9">
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const emblaOptions = {
                loop: true,
                containScroll: "trimSnaps"
            };

            document.querySelectorAll(".embla").forEach((emblaNode) => {
                const viewport = emblaNode.querySelector(".embla__viewport");
                const emblaInstance = EmblaCarousel(viewport, emblaOptions);

                // Log if Embla initializes correctly
                console.log("Embla initialized:", emblaInstance);
            });
        });


        document.addEventListener("DOMContentLoaded", () => {
            const emblaNode = document.querySelector(".embla");
            const options = {
                loop: true
            }; // Enable infinite loop
            const embla = EmblaCarousel(emblaNode, options);

        });


        document.getElementById('unduhi2Button').addEventListener('click', function() {
            const imageUrl = '/img/qi2.jpeg'; // Change to your dynamic image path
            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'QRIS_Infaq_Bank_Syariah_Indonesia.jpeg'; // Set default download name
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        document.getElementById('unduhz2Button').addEventListener('click', function() {
            const imageUrl = '/img/qz2.jpeg'; // Change to your dynamic image path
            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'QRIS_Zakat_Bank_Syariah_Indonesia.jpeg'; // Set default download name
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
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
