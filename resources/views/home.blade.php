<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

        <div class="bg-teal-400 bg-cover bg-center shadow" style="background-image: url('img/herobg.png')">
            <div class="my-4 p-8 bg-teal-500/60 grid grid-cols-2">

                <div class="content-center">
                    <h1 class="text-4xl font-bold tracking-wider text-gray-200 mb-6">Lorem, ipsum dolor.</h1>
                    <p class="text-xs mb-6 text-gray-200">lazswara.org</p>
                    <button class=" bg-teal-800 border p-2 rounded-md text-gray-200">Hubungi Kami</button>
                </div>
                <div class=" place-self-center">
                    <img class="size-64" src="{{ asset('img/logotransparentsqr.png') }}" alt="">
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
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sapiente unde, inventore, hic voluptas
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
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut reiciendis doloremque voluptatem totam
        porro fugiat
        quas error eos at nesciunt!</p>
    <h2 class="border border-red-700 ">mitra kami</h2>
    <p class="border border-red-700 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, doloremque!</p>
    <h2 class="border border-red-700 ">perhatian</h2>
    <p class="border border-red-700 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa quidem voluptates dignissimos odit,
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
