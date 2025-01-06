<header class="bg-cover bg-center shadow" style="background-image: url('{{ $backgroundImage }}')">
    <div class="bg-teal-500/60">
        <div class="grid md:grid-cols-2">
            <div class="md:hidden place-self-center">
                <img class="size-64" src="{{ asset('img/logotransparentsqr.png') }}" alt="">
            </div>
            <div class="justify-content-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-bold tracking-wider text-gray-200">{{ $slot }}</h1>
            </div>
            <div class="hidden md:block place-self-center">
                <img class="size-64" src="{{ asset('img/logotransparentsqr.png') }}" alt="">
            </div>
        </div>
    </div>
</header>
