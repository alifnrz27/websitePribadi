<div class="container">
    <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
            <h2 class="font-bold text-primary text-3xl mb-2 sm:text-4xl lg:text-5xl">Komentar</h2>
        </div>
    </div>

    <form action="/comment/{{ $type }}/{{ $slug }}" method="post">
        @csrf
        <div class="w-full lg:w-2/3 lg:mx-auto">
            <div class="w-full mb-3 px-4">
                <label for="name" class="text-base text-primary font-bold">Nama</label>
                <input type="text" id="name" name="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full mb-3 px-4">
                <label for="email" class="text-base text-primary font-bold">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full mb-3 px-4">
                <label for="comment" class="text-base text-primary font-bold">Komentar</label>
                <textarea type="text" name="comment" id="comment" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32">
                </textarea>
            </div>
            <div class="w-full mb-10">
                <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
            </div>
        </div>
    </form>

    @foreach($comments as $comment)
        <h2 class="text-secondary text-md mt-4 mb-2">{{ $comment->name }} ({{ $comment->email }})</h2>
        <div class="flex mb-3">
            <div class="ml-2 block  mb-3 font-semibold text-sm text-dark dark:text-white hover:text-primary">
                {{ $comment->comment }}
            </div>
        </div>
        <h2 class="text-secondary text-md mt-4 mb-2">{{ date ('d/m/Y', strtotime ($comment->created_at)) }}</h2>
        <hr class="mb-3 text-white dark:text-white">
    @endforeach
{{-- akhir comment section --}}
</div>