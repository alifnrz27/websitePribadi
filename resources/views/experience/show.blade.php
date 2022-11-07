<x-guest-layout>
    @section('title', '{{ $experience->title }}')
    <div class="container pt-36">
        {{-- menampilkan foto utama --}}
        <div class="w-full self-center px-4">
            <div class="w-full self-end px-4">
                <div class="relative mt-10 lg:mt-9  lg:right-0">
                    <img src="/storage/{{ $experience->image }}" alt="{{ $experience->title }}" class="max-w-full mx-auto relative z-10 text-white"/>
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap">
            <div class="w-full self-center px-6 lg:w-3/4">
                <h1 class="text-3xl mb-5 font-semibold text-primary">{{ $experience->title }}</h1>
                <div class="font-medium text-secondary dark:text-white my-5 leading-relaxed">
                    {!! $experience->content !!}
                </div>

                <p class="font-medium text-secondary mb-10 leading-relaxed">Dibuat oleh <a href="">{{ $user->name }}</a> pada {{ date ('d/m/Y', strtotime ($experience->created_at)) }}</p>
            </div>
        </div>
    </div>
</x-guest-layout>