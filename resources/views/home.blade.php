<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Tabel Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 mb-6 drop-shadow-md">Tabel Zakat</h2>
    </div>
    <div class="grid grid-cols-5 my-4 break-words md:break-normal items-stretch min-h-[150px]">

        {{-- Row 1 --}}
        <div class="border-b-2 rounded-tl-lg flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg m-2 p-2 text-center flex flex-col justify-center items-center">
                <h2 class="break-all md:break-normal">Jenis Zakat</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div
                class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Nisab (Batas Wajib Zakat)</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div
                class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Kadar Zakat</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div
                class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Waktu</h2>
            </div>
        </div>
        <div class="border-b-2 rounded-tr-lg flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div
                class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Perhitungan</h2>
            </div>
        </div>

        {{-- Row 2 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg my-2 md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Penghasilan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">524 Kg Beras</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Saat Menerima</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Penghasilan &times;2.5%</h2>
            </div>
        </div>

        {{-- Row 3 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Perdagangan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">85 Gram Emas</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">(Modal yang Diputar + Laba + Piutang Lancar) - (Hutang Jatuh Tempo
                    + Kerugian) &times; 2,5%</h2>
            </div>
        </div>

        {{-- Row 4 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Emas & Perak</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Emas: 85 gram <br> Perak: 595 gram</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Emas yang Dimiliki - Emas/Perak yang Dipakai &times; 2,5%</h2>
            </div>
        </div>

        {{-- Row 5 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Pertanian</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">524 Kg Beras</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">5% irigasi <br>
                    10% tadah air hujan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Saat Panen</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">5% &times; Hasil Panen 10% &times; Hasil Panen</h2>
            </div>
        </div>

        {{-- Row 6 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Peternakan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Kambing : 40 ekor <br>
                    Sapi : 30 ekor</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Ekor</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Ekor Setiap 40 - 120 Ekor Kambing <br>
                    1 Ekor Setiap 30 - 59 Ekor Sapi</h2>
            </div>
        </div>

        {{-- Row 7 --}}
        <div class="rounded-bl-lg flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Tabungan</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">85 gram emas/ <br>
                    595 gram perak</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">(Saldo Akhir - Bunga) &times; 2,5% <br> Jika Menabung di Bank
                    Konvensional</h2>
            </div>
        </div>

    </div>
    {{-- Tabel Section End --}}

    {{-- Capaian Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 my-4 drop-shadow-md">Capaian Kami</h2>
    </div>
    <div class="grid md:grid-cols-3 my-4 break-words md:break-normal items-stretch min-h-[150px] gap-4">
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/home1.png');">
            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-xl drop-shadow-md">Sebanyak <strong>11.751 </strong>Orang</h2>
                <p class="text-lg drop-shadow-md">Jumlah <strong>Muzzaki & Munfiq</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/home2.png');">
            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-2xl md:text-xl drop-shadow-md">Sebanyak <strong> 24.125 </strong>Orang</h2>
                <p class="text-lg drop-shadow-md">Jumlah <strong>Mustahik</strong></p>
            </div>
        </div>
        <div class="bg-cover bg-center rounded-lg shadow w-full items-center"
            style="background-image: url('/img/home3.png');">
            <div
                class="content-center rounded-lg text-center justify-center items-center bg-orange-300/60 h-80 md:h-64">
                <h2 class="text-xl drop-shadow-md">Lebih dari <strong>15</strong></h2>
                <p class="text-lg drop-shadow-md">Jumlah <strong>Mitra</strong></p>
            </div>
        </div>
    </div>
    {{-- Capaian Section End --}}

    {{-- Hubungi Section Start --}}
    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 pt-4 my-4 drop-shadow-md">Hubungi Kami</h2>
    </div>
    <div class="grid md:grid-cols-2 my-4 break-words md:break-normal gap-4 h-screen md:h-80 items-stretch">
        <div class="bg-cover bg-top rounded-lg shadow w-full items-center"
            style="background-image: url('/img/20.png');">
            <div class="items-center justify-center bg-teal-500/20 h-full w-full rounded-lg">
            </div>
        </div>
        <div class="content-center rounded-lg px-4 place-self-center bg-teal-500/20 h-36">
            <h2><strong>Silahkan hubungi kami untuk informasi lebih lanjut.</strong>
            </h2>
            <p><strong>Admin Swara </strong>Via WhatsApp</p>
            <p>+62 853 4968 8826</p>
        </div>
    </div>
    {{-- Hubungi Section End --}}

    {{-- Scroll to Top Button Start --}}
    <div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" x-show="isVisible"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2"
        class="fixed bottom-6 right-6 z-50 end-4 top-4 sm:end-6 sm:top-6 lg:end-8 lg:top-8">
        <button
            class="inline-block rounded-full bg-teal-600 p-2 text-white shadow transition hover:bg-teal-500 sm:p-3 lg:p-4"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <span class="sr-only">Back to top</span>

            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>
    {{-- Scroll to Top Button End --}}

</x-layout>
