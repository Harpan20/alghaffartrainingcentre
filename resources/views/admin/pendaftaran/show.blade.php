<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
        <a
            href="{{ route('dashboard') }}"
            class="rounded-lg border border-gray-200 bg-white py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >Kembali</a>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                            <thead class="text-xs uppercase text-gray-700 dark:text-gray-400">
                                <tr>
                                    <th
                                        scope="col"
                                        class="bg-gray-50 px-6 py-3 dark:bg-gray-800"
                                    >
                                        Field
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        Isi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Nama
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pendaftaran->nama }}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Kelas
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pendaftaran->kelas->nama }}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Biaya
                                    </th>
                                    <td class="px-6 py-4">
                                        Rp {{ number_format($pendaftaran->kelas->biaya, '2', ',', '.') }}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Tanggal Lahir
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pendaftaran->tanggal_lahir }}

                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        No Telepon
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pendaftaran->no_telepon }}

                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Email
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pendaftaran->email }}
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Alamat
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $pendaftaran->alamat }}
                                    </td>
                                </tr>
                                <tr class="border-gray-200 dark:border-gray-700">
                                    <th
                                        scope="row"
                                        class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white"
                                    >
                                        Status
                                    </th>
                                    <td class="px-6 py-4">
                                        @if ($pendaftaran->terdaftar == 1)
                                            <span
                                                class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300"
                                            >Terdaftar</span>
                                        @else
                                            <span
                                                class="mr-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300"
                                            >Belum Terdaftar</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
