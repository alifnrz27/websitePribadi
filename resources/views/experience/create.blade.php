<x-app-layout>
    @section('title', 'Create new experience')
    <section id="contact" class="pt-3 dark:bg-slate-900">
        <div class="w-11/12 lg:w-11/12 flex pt-20 pb-32">
            <div class="w-11/12 lg:w-full dark:text-white">
                <div class="container">
                    <div class="w-full px-4">
                        <div class="mx-auto text-center mb-16">
                            <h4 class="font-semibold text-lg text-primary mb-2">Experience</h4>
                            <h2 class="font-bold text-dark dark:text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Tambahkan Pengalaman Baru</h2>
                            <p class="font-medium text-md text-secondary md:text-lg">Bagikan pengalaman mu!</p>
                        </div>
                    </div>
            
                    <form action="/experience" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full lg:w-2/3 lg:mx-auto">
                            <div class="w-full mb-8 px-4">
                                <label for="title" class="text-base text-primary font-bold">Judul</label>
                                <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full bg-white text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                            </div>
                            <div class="w-full mb-8 px-4">
                                <label for="image" class="text-base text-primary font-bold">Gambar</label>
                                <img src="" class="img-preview h-40 hidden" style="height: 250px" alt="">
                                <input type="file" id="image" name="image" onchange="previewImage()">
                            </div>
                            <div class="w-full mb-8 px-4">
                                <label for="experienceEditor" class="text-base text-primary font-bold">Content</label>
                                <textarea type="text" id="experienceEditor" name="content" class="w-full bg-white text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                                    {{ old('content') }}
                                </textarea>
                            </div>
                            <div class="w-full">
                                <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <x-sidebar></x-sidebar>
    </section>

    
    </div>

    
</x-app-layout>