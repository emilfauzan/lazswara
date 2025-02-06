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
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4 md:hidden">
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
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n Y Swara MU Zakat</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-8">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>72 9593 1463</p>
                </div>
                <button rz1-copy
                    class="copyButton px-4 py-2 text-center rounded-lg border-2 cursor-pointer bg-gray-200 hover:bg-gray-300">
                    <p>
                        Copy
                    </p>
                </button>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p><strong>QRIS</strong></p>
                </div>
            </div>
            <div class="border-b-2">
            </div>
            <div class="grid grid-cols-2 gap-2 mx-2 mb-4 mt-8">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center"
                    style="background-image: url('/img/rekening2.png');">
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n LAZ Sinergi</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-6">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>7179797903</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>Copy</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p><strong>QRIS</strong></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Rekening Infaq --}}
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4 md:hidden">
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
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n Swara MU Infaq</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-8">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>72 9593 1412</p>
                </div>
                <button ri2-copy
                    class="copyButton px-4 py-2 text-center rounded-lg border-2 cursor-pointer bg-gray-200 hover:bg-gray-300">
                    <p>
                        Copy
                    </p>
                </button>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p><strong>QRIS</strong></p>
                </div>
            </div>
            <div class="border-b-2">
            </div>
            <div class="grid grid-cols-2 gap-2 mx-2 mb-4 mt-8">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center"
                    style="background-image: url('/img/rekening2.png');">
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>a/n LAZ Sinergi</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-6">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>7179797903</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>Copy</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p><strong>QRIS</strong></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Rekening Mobile Section End --}}

    {{--  --}}

    {{-- Rekening Zakat Section Start --}}
    <div class="md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4 hidden md:block">
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
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n Y Swara MU Zakat</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>72 9593 1463</p>
                </div>
                <button rz1-copy
                    class="copyButton px-4 py-2 text-center rounded-lg border-2 cursor-pointer bg-gray-200 hover:bg-gray-300">
                    <p>
                        Copy
                    </p>
                </button>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-1">
                    <p><strong>QRIS</strong></p>
                </div>
            </div>
            <div class="grid grid-cols-10 gap-2 mx-2 my-2 mb-6">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center col-span-2"
                    style="background-image: url('/img/rekening2.png');">
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n LAZ Sinergi</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>7179797903</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-1">
                    <p>Copy</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-1">
                    <p><strong>QRIS</strong></p>
                </div>
            </div>
        </div>
    </div>
    {{-- Rekening Zakat Section End --}}

    {{-- Rekening Infaq Section Start --}}
    <div class="md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4 hidden md:block">
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
            <div class="grid grid-cols-10 gap-2 mx-2 my-2 mb-6">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center col-span-2"
                    style="background-image: url('/img/rekening.png');">
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n Swara MU Infaq</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>72 9593 1412</p>
                </div>
                <button ri2-copy
                    class="copyButton px-4 py-2 text-center rounded-lg border-2 cursor-pointer bg-gray-200 hover:bg-gray-300">
                    <p>
                        Copy
                    </p>
                </button>
                <!-- QRIS Button Start -->
                <div x-data="{ z2: false }" @keydown.escape.window="z2 = false" class="justify-self-center">
                    <button @click="z2 = true"
                        class="content-center text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer">
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
                                QZ2
                                {{-- QRIS Rekening Infaq - Bank
                                Muamalat --}}
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
            <div class="grid grid-cols-10 gap-2 mx-2 my-2 mb-6">
                <div class="bg-contain bg-no-repeat bg-center w-full items-center col-span-2"
                    style="background-image: url('/img/rekening2.png');">
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-3">
                    <p>a/n LAZ Sinergi</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>7179797903</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>Copy</p>
                </div>
                <!-- QRIS Button Start -->
                <div x-data="{ i2: false }" @keydown.escape.window="i2 = false" class="justify-self-center">
                    <button @click="i2 = true"
                        class="content-center text-center rounded-lg  bg-gray-200 hover:bg-gray-300 px-4 py-3 cursor-pointer">
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
                            <h3 class="text-lg text-center font-semibold text-gray-900">QRIS Rekening Infaq - Bank
                                Muamalat</h3>
                            <div class="w-auto h-96 bg-contain bg-fit bg-center bg-no-repeat"
                                style="background-image: url('/img/qi2.jpeg');">
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Dapat langsung scan atau unduh gambar.
                            </p>
                            <div class="mt-4 flex justify-end">
                                <button @click="i2 = false"
                                    class="px-4 py-2 bg-gray-300 rounded-md hover:bg-gray-400">Batal</button>
                                <button id="unduhButton"
                                    class="ml-3 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Unduh</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- QRIS Button End -->
            </div>
        </div>
    </div>
    {{-- Rekening Infaq Section End --}}

    <div class="embla overflow-hidden">
        <div class="embla__container flex">
            <div class="embla__slide min-w-full">
                <img src="/img/program1.png" class="w-full rounded-lg" alt="Image 1">
            </div>
            <div class="embla__slide min-w-full">
                <img src="/img/program2.png" class="w-full rounded-lg" alt="Image 2">
            </div>
            <div class="embla__slide min-w-full">
                <img src="/img/program3.jpeg" class="w-full rounded-lg" alt="Image 3">
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const emblaNode = document.querySelector(".embla");
            const options = {
                loop: true
            }; // Enable infinite loop
            const embla = EmblaCarousel(emblaNode, options);

        });


        document.getElementById('unduhButton').addEventListener('click', function() {
            const imageUrl = '/img/qi2.jpeg'; // Change to your dynamic image path
            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'QRIS_Infaq_Bank_Muamalat.jpeg'; // Set default download name
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

        document.getElementById('unduhz2Button').addEventListener('click', function() {
            const imageUrl = '/img/qz2.jpeg'; // Change to your dynamic image path
            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'QRIS_Infaq_Bank_Muamalat.jpeg'; // Set default download name
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

        // Rekening Zakat 2
        document.querySelectorAll("[-copy]").forEach(button => {
            button.addEventListener("click", function() {
                const text = "7179797903";

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
        document.querySelectorAll("[-copy]").forEach(button => {
            button.addEventListener("click", function() {
                const text = "7179797903";

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
