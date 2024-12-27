<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>layout halaman home</h3>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/program">Program</a>
    <a href="/pendidikan">Pendidikan</a>
    <a href="/kesehatan">Kesehatan</a>
    <a href="/kemanusiaan">Kemanusiaan</a>
    <a href="/ekonomi">Ekonomi</a>
    <a href="/dakwah">Dakwah</a>
    <a href="/zakat">Zakat</a>
    <a href="/laporan">Laporan</a>
    <a href="/rekening">Rekening</a>
    <h1>Home</h1>
    <img src="img/logotransparent.png" alt="logo">
    <h2>tabel zakat</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sapiente unde, inventore, hic voluptas
        sed minus at,
        neque voluptatibus laborum natus dolore ratione consequatur repellat. Aliquid veniam natus atque
        mollitia illo
        laboriosam iste pariatur architecto maxime ipsum, praesentium assumenda culpa dolores! Neque natus,
        a qui illum
        officiis nostrum voluptas consectetur.</p>
    <h2>capaian kami</h2>
    <p>Lorem ipsum dolor sit amet.</p>
    <p>Lorem ipsum dolor sit amet.</p>
    <p>Lorem ipsum dolor sit amet.</p>
    <h2>hubungi kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut reiciendis doloremque voluptatem totam
        porro fugiat
        quas error eos at nesciunt!</p>
    <h2>mitra kami</h2>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quas porro culpa?
    <h2>perhatian</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab ipsa quidem voluptates dignissimos odit,
        atque
        dolorem, vero ullam, omnis dicta distinctio! Dolorum veritatis in earum.</p>
    <h2>footer</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, corrupti. Saepe illum culpa
        deleniti molestias
        facere expedita dolorum, animi facilis.</p>

    {{-- Scroll to Top Button --}}
    <div x-data="{ isVisible: false }" x-init="window.addEventListener('scroll', () => { isVisible = window.scrollY > 100; })" x-show="isVisible"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2"
        class=" fixed bottom-6 right-6 z-50absolute end-4 top-4 sm:end-6 sm:top-6 lg:end-8 lg:top-8">
        <button
            class="inline-block rounded-full bg-teal-600 p-2 text-white shadow transition hover:bg-teal-500 sm:p-3 lg:p-4"
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
            <span class="sr-only">Back to top</span>

            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    {{-- Footer Section --}}
    <footer class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2">

                {{-- Right Footer Section --}}
                <div class="border-b border-gray-100 py-8 lg:order-last lg:border-b-0 lg:border-s lg:py-16 lg:ps-16">
                    <div class="block text-teal-600 lg:hidden">
                        <img class="justify-self-center size-36" src="img/logosquare.PNG" alt="LAZ Swara">
                    </div>

                    <div class="mt-8 space-y-4 lg:mt-0">
                        <span class="hidden h-1 w-10 rounded bg-teal-500 lg:block"></span>

                        <div class="text-center lg:text-left">
                            <h2 class=" text-2xl font-medium text-gray-900">Lokasi Kami</h2>

                            <p class="mt-4  text-gray-500">
                                Jl. Dayung No.8, Tlk. Lingga, Kec. Sangatta Utara, Kabupaten Kutai Timur, Kalimantan
                                Timur 75683
                            </p>
                        </div>
                        <div class="block justify-self-center">
                            <iframe class="aspect-square"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22568.86547829671!2d117.52301569010554!3d0.5271470437625458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320a35b5f8cd94d5%3A0x4073d181d20e9b1a!2sLAZ%20Swara%20Mandiri%20Ummat!5e0!3m2!1sen!2sid!4v1735263877831!5m2!1sen!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <a class="group flex items-center justify-between gap-4 rounded-lg border border-teal-600 bg-teal-600 px-5 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring"
                            href="https://maps.app.goo.gl/EafDKf1JzEjQpp8X6" target="_blank">
                            <span
                                class="font-medium text-white transition-colors group-hover:text-teal-600 group-active:text-teal-500">
                                Arahkan saya
                            </span>

                            <span
                                class="shrink-0 rounded-full border border-current bg-white p-2 text-teal-600 group-active:text-teal-500">
                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                {{-- Left Footer Section --}}
                <div class="py-8 lg:py-16 lg:pe-16">
                    <div class="hidden text-teal-600 lg:block">
                        <img class="justify-self-center size-36" src="img/logosquare.PNG" alt="LAZ Swara">
                    </div>

                    <div
                        class="mt-8 grid grid-cols-1 gap-8 justify-items-center text-center lg:justify-items-start lg:text-left">
                        <div class="">
                            <p class="text-lg font-medium text-gray-900">Navigasi</p>

                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="/" class="text-gray-700 transition hover:opacity-75"> Beranda
                                    </a>
                                </li>

                                <li>
                                    <a href="/about" class="text-gray-700 transition hover:opacity-75"> Tentang Kami
                                    </a>
                                </li>

                                <li>
                                    <a href="/program" class="text-gray-700 transition hover:opacity-75"> Program
                                    </a>
                                </li>

                                <li>
                                    <a href="/zakat" class="text-gray-700 transition hover:opacity-75"> Zakat
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Layanan </a>
                                </li>
                            </ul>
                        </div>

                        <p class="mt-4 text-lg font-medium text-gray-900">Hubungi Kami</p>
                        <a class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 text-gray-900" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>

                            <span class="flex-1 text-gray-700">+62853 4968 8826 - Admin Swara</span>
                        </a>
                        <a class="flex items-center justify-center gap-1.5 ltr:sm:justify-start rtl:sm:justify-end"
                            href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 text-gray-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="flex-1 text-gray-700">sinergimembangunummat@gmail.com</span>
                        </a>
                    </div>

                    <div
                        class="mt-16 border-t border-gray-100 pt-8 sm:flex sm:items-center sm:justify-between lg:mt-16">
                        <ul class="justify-items-center sm:flex sm:flex-wrap gap-4 text-xs">
                            <li>
                                <a href="#" class="text-gray-500 transition hover:opacity-75"> Terms &
                                    Conditions </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-500 transition hover:opacity-75"> Privacy Policy
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-500 transition hover:opacity-75"> Cookies </a>
                            </li>
                        </ul>

                        <ul class="mt-8 flex justify-center gap-6 sm:mt-0 lg:justify-end">
                            <li>
                                <a href="#" rel="noreferrer" target="_blank"
                                    class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Facebook</span>

                                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" rel="noreferrer" target="_blank"
                                    class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Instagram</span>

                                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" rel="noreferrer" target="_blank"
                                    class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Twitter</span>

                                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" rel="noreferrer" target="_blank"
                                    class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">GitHub</span>

                                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="#" rel="noreferrer" target="_blank"
                                    class="text-gray-700 transition hover:opacity-75">
                                    <span class="sr-only">Dribbble</span>

                                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>


                    </div>
                    <p class="mt-8 text-xs text-center text-gray-500">Copyright &copy; 2024 <strong>LAZ Swara </strong>
                        by Emil Fauzan</p>
                </div>
            </div>
        </div>
    </footer>

</x-layout>
