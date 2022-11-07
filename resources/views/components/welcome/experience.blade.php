<section id="experience" class="pt-36 pb-32 bg-slate-800 dark:bg-slate-300">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Pengalaman</h4>
                <h2 class="font-bold text-white dark:text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang pernah diikuti</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Terdapat beberapa pengalaman di beberapa bidang yang pernah aku jalani</p>
            </div>
        </div>

        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                @foreach($experiences as $experience)
                    <a href="/experience/{{ $experience->slug }}" class="masx-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img width="40" src="/storage/{{ $experience->image }}" alt="logo">
                    </a>
                @endforeach
                <a href="/experience" class="mx-auto text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Lihat lainnya</a>
            </div>
            
        </div>
    </div>
</section>