<section id="blog" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Blog</h4>
                <h2 class="font-bold text-dark dark:text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan terkini</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Berikut adalah belerapa tulisan blog terakhir ku</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            @foreach($blogs as $blog)
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-600">
                    <img src="/storage/{{ $blog->image }}" alt="{{ $blog->title }}" class="w-full">
                    <div class="py-8 px-6">
                        <a href="/blog/{{ $blog->slug }}" class="block  mb-3 font-semibold text-xl text-dark dark:text-white hover:text-primary truncate">
                            <h3 class="">{{ $blog->title }}</h3>
                        </a>
                        {{-- <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, necessitatibus.</p> --}}
                        <a href="/blog/{{ $blog->slug }}" class="font-emdium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
            <a href="/blog" class="mx-auto text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Lihat lainnya</a>
        </div>
    </div>
</section>