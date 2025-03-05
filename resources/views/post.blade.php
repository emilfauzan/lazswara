<x-layout>
    <x-slot:titlepage>{{ $titlepage }}</x-slot:titlepage>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="my-4 p-4 bg-teal-500/20 rounded-md justify-items-center gap-4">
        <div class="bg-white rounded-lg px-4 py-8 mb-4 justify-items-center">
            <h2 class="text-3xl tracking-tight font-bold text-center mb-2">{{ $post['title'] }}</h2>
            <p class="text-center text-base text-gray-500 mb-2">{{ $post->author->name }} |
                {{ $post->created_at->format('j F Y') }} | {{ $post->created_at->diffForHumans() }}</p>
            <p class="text-center mb-4 font-light">{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to Post</a>
        </div>
    </div>

</x-layout>
