<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center grid grid-cols-1 md:grid-cols-2 gap-4">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg px-4 py-8 mb-4 justify-items-center">
                <h2 class="text-3xl tracking-tight font-bold text-center mb-2">{{ $post['title'] }}</h2>
                <div class="text-center text-base text-gray-500 mb-2">
                    <a class="hover:underline" href="/authors/{{ $post->author->id }}">{{ $post->author->name }} </a><br>
                        {{ $post->created_at->format('j F Y') }} | {{ $post->created_at->diffForHumans() }}
                </div>
                <p class="text-center mb-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
                <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline"> Read More
                    &raquo;</a>
            </div>
        @endforeach
    </div>

</x-layout>
