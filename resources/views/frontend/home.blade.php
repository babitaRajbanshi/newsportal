<x-frontend-layout>

    <section>
        <div class="container py-8">
            <div class="shadow-lg p-4 rounded-2xl">
                <a href="">
                    <h1 class="text-4xl font-bold mb-4">{{ $article->title }}</h1>
                    <img src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                </a>

            </div>
        </div>
    </section>
</x-frontend-layout>
