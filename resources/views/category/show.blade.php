<x-guest-layout>
    @section('title', '{{ $category->category }}')
    <section id="category" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Kategori</h4>
                </div>
            </div>

            <div class="flex flex-wrap">
                @foreach($blogs as $blog)
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-600">
                            <img src="/storage/{{ $blog->image }}" alt="{{ $blog->title }}" class="max-h-52 mx-auto">
                            <div class="py-8 px-6">
                                <a href="/blog/{{ $blog->slug }}" class="block  mb-3 font-semibold text-xl text-dark dark:text-white hover:text-primary truncate">
                                    <h3 class="">{{ $blog->title }}</h3>
                                </a>
                                <a href="/blog/{{ $blog->slug }}" class="font-emdium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>