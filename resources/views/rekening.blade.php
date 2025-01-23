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

    {{-- Rekening Zakat Mobile Section Start --}}
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
                    <p>a/n Sinergi Membangun Ummat</p>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mx-2 my-2 mb-8">
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums italic font-semibold">
                    <p>6050010011</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2">
                    <p>Copy</p>
                </div>
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
    {{-- Rekening Zakat Mobile Section End --}}

    {{-- Rekening Zakat Section Start --}}
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4">
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
                    <p>a/n Sinergi Membangun Ummat</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>6050010011</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-1">
                    <p>Copy</p>
                </div>
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
    <div class="grid md:grid-cols-1 my-4 break-words md:break-normal items-stretch gap-4">
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
                    <p>a/n Sinergi Membangun Ummat</p>
                </div>
                <div
                    class="px-2 py-2 content-center text-center rounded-lg border-2 proportional-nums col-span-3 italic font-semibold">
                    <p>6050010011</p>
                </div>
                <div class="px-2 py-2 content-center text-center rounded-lg border-2 col-span-1">
                    <p>Copy</p>
                </div>
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
    {{-- Rekening Infaq Section End --}}

</x-layout>
