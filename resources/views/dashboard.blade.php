<x-app-layout>
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

                <x-card-admin></x-card-admin>

                <section>
                    <div class="flex flex-wrap bg-gray-100 dark:bg-dark rounded-lg py-7 px-3">
                        <div class="w-full lg:w-1/2 p-4 bg-white dark:bg-secondary rounded-lg h-full">
                            <div class="w-full self-center px-4 lg:w-1/2">
                                <h1 class="text-base font-semibold text-primary dark:text-white md:text-xl">Seluruh Blog</h1>
                            </div>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full">
                                                <thead class="border-b">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    #
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    First
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Last
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Handle
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Otto
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Jacob
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Thornton
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @fat
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Larry
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Wild
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @twitter
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 p-4 bg-white dark:bg-secondary rounded-lg h-full">
                            <div class="w-full self-center px-4 lg:w-1/2">
                                <h1 class="text-base font-semibold text-primary dark:text-white md:text-xl">Seluruh Project</h1>
                            </div>
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full">
                                                <thead class="border-b">
                                                <tr>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    #
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    First
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Last
                                                    </th>
                                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Handle
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Otto
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Mark
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Otto
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @mdo
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Jacob
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Thornton
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @fat
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-white border-b">
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Larry
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        Wild
                                                        </td>
                                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                        @twitter
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <x-sidebar></x-sidebar>
        </div>
    </div>

</x-app-layout>
