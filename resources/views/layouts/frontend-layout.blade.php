<!DOCTYPE html>
<html
    class="scroll-smooth"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
>

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- icon --}}
    <link
        rel="icon"
        {{-- href="{{ Vite::asset('resources/icons/favicon.png') }}" --}}
        href="{{ asset('favicon.png') }}"
    >

    <!-- Fonts -->
    <link
        rel="preconnect"
        href="https://fonts.bunny.net"
    >
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
        rel="stylesheet"
    />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- flowbite js --}}
    @vite(['resources/js/flowbite.js'])

</head>

<body class="bg-slate-50 font-sans antialiased">
    <div class="mx-auto min-h-screen dark:bg-gray-900">

        {{-- navbar --}}
        <nav
            class="fixed top-0 left-0 z-50 w-full border-b border-gray-200 bg-white dark:border-gray-600 dark:bg-gray-900">
            <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
                <a
                    href="#beranda"
                    class="flex items-center"
                >
                    <img
                        src="{{ Vite::asset('resources/images/logo-icon.png') }}"
                        class="mr-3 h-10"
                        alt="Flowbite Logo"
                    >
                    <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Al-Ghaffar</span>
                </a>
                <div class="flex md:order-2">
                    <a
                        href="#daftar"
                        class="bg-gradient from-brand-default to-brand-secondary-default focus:ring-brand-secondary-default/50 mr-3 rounded-lg bg-gradient-to-r px-4 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 hover:bg-gradient-to-br focus:outline-none focus:ring-4"
                    >
                        Daftar
                    </a>
                    <button
                        data-collapse-toggle="navbar-sticky"
                        type="button"
                        class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                        aria-controls="navbar-sticky"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="h-6 w-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto"
                    id="navbar-sticky"
                >
                    <ul
                        class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
                        <li>
                            <a
                                href="#galeri"
                                class="hover:from-brand-default hover:to-brand-secondary-default block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gradient-to-r hover:bg-clip-text hover:text-transparent md:p-0 md:hover:bg-transparent"
                            >
                                Galeri
                            </a>
                        </li>
                        <li>
                            <a
                                href="#profil"
                                class="hover:from-brand-default hover:to-brand-secondary-default block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gradient-to-r hover:bg-clip-text hover:text-transparent md:p-0 md:hover:bg-transparent"
                            >Profil</a>
                        </li>
                        <li>
                            <a
                                href="#kelas"
                                class="hover:from-brand-default hover:to-brand-secondary-default block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gradient-to-r hover:bg-clip-text hover:text-transparent md:p-0 md:hover:bg-transparent"
                            >Kelas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Page Content -->
        <main class="mt-[4.5rem]">
            {{ $slot }}
        </main>


        <footer class="bg-white shadow dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a
                        href="#beranda"
                        class="mb-4 flex items-center sm:mb-0"
                    >
                        <img
                            src="{{ Vite::asset('resources/images/logo-icon.png') }}"
                            class="mr-3 h-8"
                            alt="Al-Ghaffar"
                        />
                        <span
                            class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Al-Ghaffar</span>
                    </a>
                    <ul
                        class="mb-6 flex flex-wrap items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mb-0">
                        <li>
                            <a
                                href="#beranda"
                                class="mr-4 hover:underline md:mr-6"
                            >Beranda</a>
                        </li>
                        <li>
                            <a
                                href="#galeri"
                                class="mr-4 hover:underline md:mr-6"
                            >Galeri</a>
                        </li>
                        <li>
                            <a
                                href="#profil"
                                class="mr-4 hover:underline md:mr-6"
                            >Profil</a>
                        </li>
                        <li>
                            <a
                                href="#kelas"
                                class="hover:underline"
                            >Kelas</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 dark:border-gray-700 sm:mx-auto lg:my-8" />
                <span class="block text-sm text-gray-500 dark:text-gray-400 sm:text-center">
                    © 2023
                    <a
                        href="#beranda"
                        class="hover:underline"
                    >Al-Ghaffar Training Center</a></span>
            </div>
        </footer>

        @stack('scripts')
    </div>
</body>

</html>
