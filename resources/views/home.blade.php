<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div>
        <h2 class="text-4xl text-center font-bold tracking-wider text-gray-800 mb-6 drop-shadow-md">Tabel Zakat</h2>
    </div>
    <div class="grid grid-cols-5 my-4 break-words md:break-normal items-stretch min-h-[150px]">
        {{-- Row 1 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg m-2 p-2 text-center flex flex-col justify-center items-center">
                <h2 class="break-all md:break-normal">Jenis Zakat</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Nisab (Batas Wajib Zakat)</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Kadar Zakat</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold self-stretch uppercase rounded-lg md:m-2 p-1 m-2 md:p-2 text-center flex flex-col justify-center">
                <h2 class="break-all md:break-normal">Waktu</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
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
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">524 Kg Beras</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Saat Menerima</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div
                class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Penghasilan &times;2.5%</h2>
            </div>
        </div>
        
        {{-- Row 2 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Perdagangan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">85 Gram Emas</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div
                class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">(Modal yang Diputar + Laba + Piutang Lancar) - (Hutang Jatuh Tempo + Kerugian) x 2,5%</h2>
            </div>
        </div>
        {{-- Row 2 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Emas & Perak</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Emas: 85 gram <br> Perak: 595 gram</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div
                class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">(Emas yang Dimiliki - Emas/Perak yang Dipakai x 2,5%)</h2>
            </div>
        </div>
        {{-- Row 2 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Pertanian</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">524 Kg Beras</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">5% irigasi <br>
                    10% tadah air hujan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Saat Panen</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div
                class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">5% x Hasil Panen 10% x Hasil Panen</h2>
            </div>
        </div>
        {{-- Row 2 --}}
        <div class="border-b-2 flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Peternakan</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Kambing : 40 ekor
                    Sapi : 30 ekor</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Ekor</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="border-b-2 flex justify-center items-center">
            <div
                class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Ekor Setiap 40 - 120 Ekor Kambing 1 Ekor Setiap 30 - 59 Ekor Sapi</h2>
            </div>
        </div>
        {{-- Row 2 --}}
        <div class="flex justify-center items-center bg-orange-300/60 h-full w-full">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">Zakat Tabungan</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">85 gram emas/ <br>
                    595 gram perak</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">2.5%</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">1 Tahun</h2>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <div
                class="font-bold uppercase rounded-lg md:m-2 py-2 px-2 md:p-2 text-center self-center">
                <h2 class="break-all md:break-normal">(Saldo Akhir - Bunga) x 2,5% <br> Jika Menabung di Bank Konvensioanl</h2>
            </div>
        </div>

    </div>

    <h3 class="border border-red-700 ">layout halaman home</h3>
    <a class="border border-red-700 " href="/">Home</a>
    <a class="border border-red-700" href="/about">About</a>
    <a class="border border-red-700" href="/program">Program</a>
    <a class="border border-red-700" href="/pendidikan">Pendidikan</a>
    <a class="border border-red-700" href="/kesehatan">Kesehatan</a>
    <a class="border border-red-700" href="/kemanusiaan">Kemanusiaan</a>
    <a class="border border-red-700" href="/ekonomi">Ekonomi</a>
    <a class="border border-red-700" href="/dakwah">Dakwah</a>
    <a class="border border-red-700" href="/zakat">Zakat</a>
    <a class="border border-red-700" href="/laporan">Laporan</a>
    <a class="border border-red-700" href="/rekening">Rekening</a>
    <h2 class="border border-red-700 ">tabel zakat</h2>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sapiente unde,
        inventore, hic voluptas
        sed minus at,
        neque voluptatibus laborum natus dolore ratione consequatur repellat. Aliquid veniam natus atque
        mollitia illo
        laboriosam iste pariatur architecto maxime ipsum, praesentium assumenda culpa dolores! Neque natus,
        a qui illum
        officiis nostrum voluptas consectetur.</p>
    <h2 class="border border-red-700 ">capaian kami</h2>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet.</p>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet.</p>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet.</p>
    <h2 class="border border-red-700 ">hubungi kami</h2>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut reiciendis doloremque
        voluptatem totam
        porro fugiat
        quas error eos at nesciunt!</p>
    <h2 class="border border-red-700 ">mitra kami</h2>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, doloremque!</p>
    <h2 class="border border-red-700 ">perhatian</h2>
    <p class="border border-red-700 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa quidem
        voluptates dignissimos odit,
        atque
        dolorem, vero ullam, omnis dicta distinctio! Dolorum veritatis in earum.</p>

    {{-- Scroll to Top Button --}}
    <div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" x-show="isVisible"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2"
        class=" fixed bottom-6 right-6 z-50absolute end-4 top-4 sm:end-6 sm:top-6 lg:end-8 lg:top-8">
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

</x-layout>
