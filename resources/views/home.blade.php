<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>layout halaman home</h3>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/program">Program</a>
    <a href="/pendidikan">Pendidikan</a>
    <a href="/kesehatan">Kesehatan</a>
    <a href="/kemanusiaan">Kemanusiaan</a>
    <a href="/ekonomi">Ekonomi</a>
    <a href="/dakwah">Dakwah</a>
    <a href="/zakat">Zakat</a>
    <a href="/laporan">Laporan</a>
    <a href="/rekening">Rekening</a>
    <h1>Home</h1>
    <img src="img/logotransparent.png" alt="logo">
    <h2>tabel zakat</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sapiente unde, inventore, hic voluptas
        sed minus at,
        neque voluptatibus laborum natus dolore ratione consequatur repellat. Aliquid veniam natus atque
        mollitia illo
        laboriosam iste pariatur architecto maxime ipsum, praesentium assumenda culpa dolores! Neque natus,
        a qui illum
        officiis nostrum voluptas consectetur.</p>
    <h2>capaian kami</h2>
    <p>Lorem ipsum dolor sit amet.</p>
    <p>Lorem ipsum dolor sit amet.</p>
    <p>Lorem ipsum dolor sit amet.</p>
    <h2>hubungi kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut reiciendis doloremque voluptatem totam
        porro fugiat
        quas error eos at nesciunt!</p>
    <h2>mitra kami</h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas porro culpa?
    <h2>perhatian</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa quidem voluptates dignissimos odit,
        atque
        dolorem, vero ullam, omnis dicta distinctio! Dolorum veritatis in earum.</p>
    <h2>footer</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, corrupti. Saepe illum culpa
        deleniti molestias
        facere expedita dolorum, animi facilis.</p>

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
