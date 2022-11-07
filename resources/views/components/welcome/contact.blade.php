<section id="contact" class="pt-36 pb-32 dark:bg-slate-900">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Kontak</h4>
                <h2 class="font-bold text-dark dark:text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi kami</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Berikan masukan serta saranmu terkait website ini, ataupun hal yang menarik untuk dibahas di sini</p>
            </div>
        </div>

        <form action="/contact" method="POST">
            @csrf
            <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full mb-8 px-4">
                    <label for="name" class="text-base text-primary font-bold">Nama</label>
                    <input type="text" id="name" name="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="email" class="text-base text-primary font-bold">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="message" class="text-base text-primary font-bold">Pesan</label>
                    <textarea type="text" id="message" name="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32">
                    </textarea>
                </div>
                <div class="w-full">
                    <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</section>