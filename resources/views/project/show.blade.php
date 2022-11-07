<x-guest-layout>
    @section('title', '{{ $project->title }}')
    <div class="container pt-36">
        {{-- menampilkan foto utama --}}
        <div class="w-full self-center px-4">
            <div class="w-full self-end px-4">
                <div class="relative mt-10 lg:mt-9  lg:right-0">
                    <img src="/storage/{{ $project->image }}" alt="{{ $project->title }}" class="max-w-full mx-auto relative z-10 text-white"/>
                </div>
            </div>
        </div>

        <div class="mt-6 flex flex-wrap">
            <div class="w-full self-center px-6 lg:w-3/4">
                <h1 class="text-3xl mb-5 font-semibold text-primary">{{ $project->title }}</h1>
                <div class="flex flex-wrap">
                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mb-3 mx-2">Teknologi</a>
                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mb-3 mx-2">Teknologi</a>
                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mb-3 mx-2">Teknologi</a>
                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mb-3 mx-2">Teknologi</a>
                    <a href="" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out mb-3 mx-2">Teknologi</a>
                </div>
                <div class="font-medium text-secondary dark:text-white my-5 leading-relaxed">
                    {!! $project->content !!}
                </div>

                <p class="font-medium text-secondary mb-10 leading-relaxed">Dibuat oleh <a href="">{{ $user->name }}</a> pada {{ date ('d/m/Y', strtotime ($project->created_at)) }}</p>

                {{-- comment section --}}
                <x-comment :type="2" :slug="$project->slug" :comments="$comments"></x-comment>
                {{-- akhir comment section --}}
            </div>

            <div class="w-full h-full px-4 lg:w-1/4 bg-secondary dark:bg-white rounded-lg">
                <div class="relative mt-10 lg:mt-9  lg:right-0">
                    <h2 class="medium text-primary text-lg mb-5 lg:text-2xl">Related</h2>
                    <a href="">
                        <div class="flex mb-3">
                            <div class="w-3/12 rounded-md overflow-hidden">
                                <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                            </div>
                            <div class="w-9/12 ml-2 block  mb-3 font-semibold text-md text-white dark:text-dark hover:text-primary truncate">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nostrum, dicta et autem sint, itaque, laudantium eligendi debitis repellat numquam saepe ut doloremque mollitia. Non accusantium nemo exercitationem necessitatibus itaque sequi, veniam deleniti, quas commodi numquam eveniet fugit et, aliquid dolore saepe reprehenderit cum corrupti incidunt. Minus suscipit, fuga voluptatum incidunt obcaecati nihil perspiciatis dicta vel nisi veritatis qui labore culpa enim aliquid perferendis, asperiores eos corrupti eaque impedit fugiat. Quam, eaque? Doloribus ratione cum voluptatem veniam porro neque amet. Quidem molestias earum officia, nobis perspiciatis libero aliquam, minus esse pariatur aspernatur, dolor numquam voluptate alias amet. Autem nemo earum vero qui totam, iste repudiandae quaerat ullam quibusdam rem nostrum provident facere! Quidem eligendi dolores odit consequuntur accusantium iste autem. Quidem iure placeat dolore at dolorem nesciunt veritatis facere quo? Perferendis obcaecati natus earum veritatis in sit id modi nemo hic neque? Omnis, suscipit. Et dignissimos rerum obcaecati totam sunt repellendus explicabo ut eius suscipit maiores dolore rem molestias recusandae ab id, est voluptatem quia a sint ullam cupiditate eos exercitationem fuga. Nam consequatur suscipit vero earum dolorem odio amet recusandae perspiciatis dicta provident id voluptatem sequi mollitia facere et incidunt, perferendis veritatis optio eveniet sed ratione, odit corrupti magni.
                            </div>
                        </div>
                        <hr class="mb-3 text-white dark:text-white">
                    </a>

                    <a href="">
                        <div class="flex mb-3">
                            <div class="w-3/12 rounded-md overflow-hidden">
                                <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                            </div>
                            <div class="w-9/12 ml-2 block  mb-3 font-semibold text-md text-white dark:text-dark hover:text-primary truncate">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nostrum, dicta et autem sint, itaque, laudantium eligendi debitis repellat numquam saepe ut doloremque mollitia. Non accusantium nemo exercitationem necessitatibus itaque sequi, veniam deleniti, quas commodi numquam eveniet fugit et, aliquid dolore saepe reprehenderit cum corrupti incidunt. Minus suscipit, fuga voluptatum incidunt obcaecati nihil perspiciatis dicta vel nisi veritatis qui labore culpa enim aliquid perferendis, asperiores eos corrupti eaque impedit fugiat. Quam, eaque? Doloribus ratione cum voluptatem veniam porro neque amet. Quidem molestias earum officia, nobis perspiciatis libero aliquam, minus esse pariatur aspernatur, dolor numquam voluptate alias amet. Autem nemo earum vero qui totam, iste repudiandae quaerat ullam quibusdam rem nostrum provident facere! Quidem eligendi dolores odit consequuntur accusantium iste autem. Quidem iure placeat dolore at dolorem nesciunt veritatis facere quo? Perferendis obcaecati natus earum veritatis in sit id modi nemo hic neque? Omnis, suscipit. Et dignissimos rerum obcaecati totam sunt repellendus explicabo ut eius suscipit maiores dolore rem molestias recusandae ab id, est voluptatem quia a sint ullam cupiditate eos exercitationem fuga. Nam consequatur suscipit vero earum dolorem odio amet recusandae perspiciatis dicta provident id voluptatem sequi mollitia facere et incidunt, perferendis veritatis optio eveniet sed ratione, odit corrupti magni.
                            </div>
                        </div>
                        <hr class="mb-3 text-white dark:text-white">
                    </a>

                    <a href="">
                        <div class="flex mb-3">
                            <div class="w-3/12 rounded-md overflow-hidden">
                                <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                            </div>
                            <div class="w-9/12 ml-2 block  mb-3 font-semibold text-md text-white dark:text-dark hover:text-primary truncate">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nostrum, dicta et autem sint, itaque, laudantium eligendi debitis repellat numquam saepe ut doloremque mollitia. Non accusantium nemo exercitationem necessitatibus itaque sequi, veniam deleniti, quas commodi numquam eveniet fugit et, aliquid dolore saepe reprehenderit cum corrupti incidunt. Minus suscipit, fuga voluptatum incidunt obcaecati nihil perspiciatis dicta vel nisi veritatis qui labore culpa enim aliquid perferendis, asperiores eos corrupti eaque impedit fugiat. Quam, eaque? Doloribus ratione cum voluptatem veniam porro neque amet. Quidem molestias earum officia, nobis perspiciatis libero aliquam, minus esse pariatur aspernatur, dolor numquam voluptate alias amet. Autem nemo earum vero qui totam, iste repudiandae quaerat ullam quibusdam rem nostrum provident facere! Quidem eligendi dolores odit consequuntur accusantium iste autem. Quidem iure placeat dolore at dolorem nesciunt veritatis facere quo? Perferendis obcaecati natus earum veritatis in sit id modi nemo hic neque? Omnis, suscipit. Et dignissimos rerum obcaecati totam sunt repellendus explicabo ut eius suscipit maiores dolore rem molestias recusandae ab id, est voluptatem quia a sint ullam cupiditate eos exercitationem fuga. Nam consequatur suscipit vero earum dolorem odio amet recusandae perspiciatis dicta provident id voluptatem sequi mollitia facere et incidunt, perferendis veritatis optio eveniet sed ratione, odit corrupti magni.
                            </div>
                        </div>
                        <hr class="mb-3 text-white dark:text-white">
                    </a>
                </div>
            </div>
        </div>

        <div class="container mt-16">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-primary text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan terkini</h2>
                </div>
            </div>
    
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-600">
                        <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <a href="" class="block  mb-3 font-semibold text-xl text-dark dark:text-white hover:text-primary truncate">
                                <h3 class="">Tips belajar</h3>
                            </a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, necessitatibus.</p>
                            <a href="" class="font-emdium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
    
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-600">
                        <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <a href="" class="block  mb-3 font-semibold text-xl text-dark dark:text-white hover:text-primary truncate">
                                <h3 class="">Tips belajar</h3>
                            </a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, necessitatibus.</p>
                            <a href="" class="font-emdium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
    
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-600">
                        <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                        <div class="py-8 px-6">
                            <a href="" class="block  mb-3 font-semibold text-xl text-dark dark:text-white hover:text-primary truncate">
                                <h3 class="">Tips belajar</h3>
                            </a>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, necessitatibus.</p>
                            <a href="" class="font-emdium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>