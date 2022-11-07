<section id="project" class="pt-36 pb-16 bg-slate-200 dark:bg-slate-600">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                <h2 class="font-bold text-dark dark:text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
                <p class="font-medium text-md text-secondary dark:text-white md:text-lg">Berikut adalah beberapa conoth project yang pernah saya ikuti</p>
            </div>
        </div>

        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            @foreach($projects as $project)
            <div class="w-full lg:w-1/2">
                <a href="/project/{{ $project->slug }}" class="flex">
                    <div class="mb-12 p-4">
                        <div class="rounded-md shadow-md overflow-hidden max-w-40 max-h-52">
                            <img src="/storage/{{ $project->image }}" alt="{{ $project->title }}" width="w-full">
                        </div>
                        <h3 class="font-semibold text-xl text-dark dark:text-white mt-5 mb-3 truncate">{{ $project->title }}</h3>
                    </div>
                </a>
            </div>
            @endforeach
            <a href="/project" class="mx-auto text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Lihat lainnya</a>
        </div>
    </div>
</section>