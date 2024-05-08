<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Monariksa
                        V2</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">Guest</a>
                    <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                </div>
            </div>
        </nav>
        <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline"
                                aria-current="page">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Tunggakan</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">LHP</a>
                        </li>
                        <li>
                            <a href="#" class="text-gray-900 dark:text-white hover:underline">Kinerja</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{ $slot }}
    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                class="hover:underline">Monariksa</a>. Dikelola Seksi Pemeriksaan, Penilaian dan Penagihan
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="hover:underline me-4 md:me-6"></a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6"></a>
            </li>
            <li>
                <a href="#" class="hover:underline me-4 md:me-6"></a>
            </li>
            <li>
                <a href="#" class="hover:underline"></a>
            </li>
        </ul>
    </footer>
</body>

</html>
