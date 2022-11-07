<section class="bg-gray-100 p-3 mb-5 dark:bg-dark">
    <div class="w-full p-4 bg-white dark:bg-secondary rounded-lg h-full max-h-[1000px] overflow-auto">
        <div class="w-full self-center px-4">
            <h1 class="text-base font-semibold text-primary dark:text-white md:text-xl">Seluruh Komen</h1>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                No
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Nama
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Email
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Komentar
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                <tr class="border-b">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                    {{ $comment->name }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                    {{ $comment->email }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                        {{ $comment->comment }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                        <form action="/comment/{{ $comment->id }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button type="submit">
                                                <div class="m-2 rounded-lg bg-red-600 p-1 hover:opacity-50 transition duration-400">
                                                    <img src="/assets/images/icons/garbage.png"width="25px" alt="">
                                                </div>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>