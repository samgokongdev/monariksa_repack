<div class="mt-6 mx-auto max-w-7xl">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-9">
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select tab</label>
                    <select id="tabs"
                        class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Statistics</option>
                        <option>Services</option>
                        <option>FAQ</option>
                    </select>
                </div>
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
                    id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                            aria-controls="stats" aria-selected="true"
                            class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Statistik
                            Pemeriksaan</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                            aria-controls="about" aria-selected="false"
                            class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Jatuh
                            Tempo / Daluarsa Terdekat</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                            aria-selected="false"
                            class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">FAQ</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel"
                        aria-labelledby="stats-tab">
                        <dl
                            class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-2 xl:grid-cols-3 dark:text-white sm:p-8">
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">271</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Jumlah Tunggakan</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">30</dt>
                                <dd class="text-gray-500 dark:text-gray-400">SP2 Belum Disampaikan</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">78.95 <span
                                        class="text-orange-300">(20%)</span></dt>
                                <dd class="text-gray-500 dark:text-gray-400">Konversi</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">7</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Jumlah Kelompok</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">32</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Total FPP</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold">10</dt>
                                <dd class="text-gray-500 dark:text-gray-400">NP2 Sudah Alokasi Belum SP2</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold">741.000.000.000</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Target PKM</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold">100.000.000.000</dt>
                                <dd class="text-gray-500 dark:text-gray-400">PKM Pemeriksaan</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold">15.000.000.000</dt>
                                <dd class="text-gray-500 dark:text-gray-400">PKM Penagihan</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold"><span class="text-orange-300">10</span></dt>
                                <dd class="text-gray-500 dark:text-gray-400">JT Terdekat</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold"><span>74</span></dt>
                                <dd class="text-gray-500 dark:text-gray-400">Jumlah LHP</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold"><span class="text-green-500">50</span></dt>
                                <dd class="text-gray-500 dark:text-gray-400">LHP Tepat Waktu</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold"><span class="text-red-700">24</span></dt>
                                <dd class="text-gray-500 dark:text-gray-400">LHP Tidak Tepat Waktu</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold">300.000.000.000</dt>
                                <dd class="text-gray-500 dark:text-gray-400">SKP Terbit 2024</dd>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-2xl font-extrabold">50.000.000.000</dt>
                                <dd class="text-gray-500 dark:text-gray-400">SKP Setuju 2024</dd>
                            </div>
                        </dl>
                    </div>
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                        aria-labelledby="about-tab">
                        <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Daftar
                            Pemeriksaan Mendekati JT/Daluarsa</h2>
                        <!-- List -->
                        <ul role="list" class="space-y-1 text-gray-500 dark:text-gray-400">
                            <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg data-slot="icon" fill="currentColor" viewBox="0 0 16 16"
                                    class="flex-shrink-0 w-3.5 h-3.5 text-green-600 dark:text-green-500"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14Zm3.844-8.791a.75.75 0 0 0-1.188-.918l-3.7 4.79-1.649-1.833a.75.75 0 1 0-1.114 1.004l2.25 2.5a.75.75 0 0 0 1.15-.043l4.25-5.5Z">
                                    </path>
                                </svg>
                                <span class="leading-tight text-sm"><span class="font-semibold">
                                        QUIKSILVER INDONESIA</span>
                                    <span class="italic">(1462|112018-102019)</span>. Jatuh Tempo : <span
                                        class="text-orange-500 font-semibold">29
                                        Nov 2023</span></span>. <span class="italic">Ketua Tim : BENNI
                                    GEMINI</span>
                            </li>
                            <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-yellow-500 dark:text-yellow-500"
                                    data-slot="icon" fill="currentColor" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z">
                                    </path>
                                </svg>
                                <span class="leading-tight text-sm"><span class="font-semibold">
                                        QUIKSILVER INDONESIA</span>
                                    <span class="italic">(1462|112018-102019)</span>. Jatuh Tempo : <span
                                        class="text-orange-500 font-semibold">29
                                        Nov 2023</span></span>. <span class="italic">Ketua Tim : BENNI
                                    GEMINI</span>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="faq" role="tabpanel"
                        aria-labelledby="faq-tab">
                        <div id="accordion-flush" data-accordion="collapse"
                            data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                            data-inactive-classes="text-gray-500 dark:text-gray-400">
                            <h2 id="accordion-flush-heading-1">
                                <button type="button"
                                    class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                    aria-controls="accordion-flush-body-1">
                                    <span>Dimana saya dapat melihat Konversi?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-1" class="hidden"
                                aria-labelledby="accordion-flush-heading-1">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Anda dapat melihat konversi per
                                        masing-masing fungsional pemeriksa pajak di menu Kinerja.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Selain itu, Di menu Kinerja anda
                                        juga dapat meliat LHP apa saja yang telah anda terbitkan, SKP Tahun Berjalan
                                        yang terbit, Serta Pencairan atas SKP Tahun Berjalan</p>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-2">
                                <button type="button"
                                    class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                    aria-controls="accordion-flush-body-2">
                                    <span>Dimana saya dapat mencetak lembar kontribusi?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-2" class="hidden"
                                aria-labelledby="accordion-flush-heading-2">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Anda Dapat mencetak Lembar
                                        Kontribusi dengan meng</p>
                                </div>
                            </div>
                            <h2 id="accordion-flush-heading-3">
                                <button type="button"
                                    class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                    data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                    aria-controls="accordion-flush-body-3">
                                    <span>What are the differences between Flowbite and Tailwind UI?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 5 5 1 1 5" />
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-flush-body-3" class="hidden"
                                aria-labelledby="accordion-flush-heading-3">
                                <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the
                                        core components from Flowbite are open source under the MIT license, whereas
                                        Tailwind UI is a paid product. Another difference is that Flowbite relies on
                                        smaller and standalone components, whereas Tailwind UI offers sections of pages.
                                    </p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend
                                        using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical
                                        reason stopping you from using the best of two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these
                                        technologies:</p>
                                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                        <li><a href="https://flowbite.com/pro/"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite
                                                Pro</a></li>
                                        <li><a href="https://tailwindui.com/" rel="nofollow"
                                                class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind
                                                UI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div
            class="col-span-3 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div
                class="py-4 rounded-t-md bg-gray-50 border-b-2 border-gray-200 text-center text-sm text-gray-500 font-medium">
                Informasi
            </div>
        </div>
    </div>
</div>
