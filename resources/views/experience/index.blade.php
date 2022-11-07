<x-guest-layout>
    @section('title', 'All experiences')
    <section id="experience" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Pengalaman</h4>
                    <h2 class="font-bold text-dark dark:text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Beberapa pengalaman terbaru</h2>
                </div>
            </div>
    
            <div class="container mx-0">        
                <form action="">
                    <div class="mx-auto">
                        <div class="w-full mb-8 px-4">
                            <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" placeholder="Search" autocomplete="off">
                        </div>
                        <div class="w-full">
                            <button type="submit" class="hidden text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="flex flex-wrap">
                @foreach($experiences as $experience)
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-600">
                            <img src="/storage/{{ $experience->image }}" alt="{{ $experience->title }}" class="max-h-52 mx-auto">
                            <div class="py-8 px-6">
                                <a href="/experience/{{ $experience->slug }}" class="block  mb-3 font-semibold text-xl text-dark dark:text-white hover:text-primary truncate">
                                    <h3 class="">{{ $experience->title }}</h3>
                                </a>
                                <a href="/experience/{{ $experience->slug }}" class="font-emdium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>