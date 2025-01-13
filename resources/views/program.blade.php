<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Program Section Start --}}
    <div>
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
