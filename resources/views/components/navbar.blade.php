<nav id="navbar" class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="#home" class="font-bold text-lg text-primary block py-6">alif naufal</a>
            </div>
            <div class="flex items-center px-4">
                <button title="hamburger" id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-500 lg:dark:bg-transparent">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="/#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Tentang Saya</a>
                        </li>
                        <li class="group">
                            <a href="/#project" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Project</a>
                        </li>
                        <li class="group">
                            <a href="/experience" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Experience</a>
                        </li>
                        <li class="group">
                            <a href="/blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Blog</a>
                        </li>
                        <li class="group">
                            <a href="/#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Kontak</a>
                        </li>
                        <li class="flex items-center pl-8 mt-3 lg:mt-0">
                            <div class="flex">
                                <span class="mr-2 text-sm text-slate-500 dark:text-white">Light</span>
                                <input type="checkbox" class="hidden" id="dark-toggle">
                                <label for="dark-toggle">
                                    <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 "></div>
                                    </div>
                                </label>
                                <span class="ml-2 text-sm text-slate-500 dark:text-white">Dark</span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>