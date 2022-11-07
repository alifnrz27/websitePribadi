<x-app-layout>
    @section('title', 'Dashboard')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="w-11/12 lg:w-11/12 flex pt-20 pb-32">
            <div class="w-11/12 lg:w-full dark:text-white">
                <section class="py-4">
                    <div class="container">
                        <div class="w-full self-center px-4 lg:w-1/2">
                            <h1 class="text-base font-semibold text-primary md:text-xl">Selamat Datang, <span class="block font-bold text-dark dark:text-white text-4xl lg:text-5xl">Alif Naufal</span></h1>
                        </div>
                    </div>
                    <hr>
                </section>

                <x-card-admin :blogs="$blogs" :projects="$projects"/>

                <section>
                    <div class="flex flex-wrap bg-gray-100 dark:bg-dark rounded-lg py-7 px-3">
                        <x-blog-admin :blogs="$blogs"></x-blog-admin>

                        <x-project-admin :projects="$projects"></x-project-admin>
                    </div>
                </section>

                <x-comment-admin :comments="$comments"></x-comment-admin>

                <x-contact-admin :messages="$messages"></x-contact-admin>
            </div>

            <x-sidebar></x-sidebar>
        </div>
    </div>

</x-app-layout>
