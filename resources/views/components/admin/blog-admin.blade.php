<div class="w-full lg:w-1/2 p-4 mb-4 bg-white dark:bg-secondary rounded-lg h-full max-h-[1000px] overflow-auto">
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
                            No
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Title
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Category
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr class="border-b">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $loop->iteration }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                    {{ $blog->title }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4">
                                    Otto
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 flex">
                                        <a href="/blog/{{ $blog->slug }}">
                                            <div class="m-2 rounded-lg bg-blue-700 p-1 hover:opacity-50 transition duration-400">
                                                <img src="/assets/images/icons/eye.png" width="25px" alt="">
                                            </div>
                                        </a>
                                        <a href="/blog/{{ $blog->slug }}/edit">
                                            <div class="m-2 rounded-lg bg-green-400 p-1 hover:opacity-50 transition duration-400">
                                                <img src="/assets/images/icons/edit.png" width="25px" alt="">
                                            </div>
                                        </a>
                                        <form action="/blog/{{ $blog->slug }}" method="post">
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