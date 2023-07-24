<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                            <thead class="bg-gray-50 text-xs uppercase text-gray-700">
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        No
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        Nama
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        Kelas
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        No Telepon
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        Email
                                    </th>
                                    <th
                                        scope="col"
                                        class="w-60 max-w-xs px-6 py-3"
                                    >
                                        Status
                                    </th>
                                    <th
                                        scope="col"
                                        class="w-60 max-w-xs px-6 py-3"
                                    >
                                        Opsi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftaran as $item)
                                    <tr class="{{ !$loop->last ? 'border-b' : '' }} bg-white">
                                        <th
                                            scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                        >
                                            {{ $loop->iteration }}
                                        </th>
                                        <th
                                            scope="row"
                                            class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                        >
                                            {{ $item->nama }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->kelas->nama }}
                                        </td>
                                        <td class="px-6 py-4">
                                            +62{{ $item->no_telepon }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->email }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($item->terdaftar == 1)
                                                <span
                                                    class="mr-2 rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300"
                                                >Terdaftar</span>
                                            @else
                                                <span
                                                    class="mr-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300"
                                                >Belum Terdaftar</span>
                                            @endif
                                        </td>
                                        <td class="w-20 max-w-xs px-6 py-4 text-right">
                                            <div class="flex flex-row gap-2">
                                                <a
                                                    href="{{ route('dashboard.pendaftaran.show', $item->id) }}"
                                                    class="rounded-lg border border-gray-200 bg-white py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200"
                                                >
                                                    Lihat
                                                </a>
                                                <a
                                                    href="{{ route('dashboard.pendaftaran.edit.status', $item->id) }}"
                                                    class="rounded-lg bg-yellow-400 px-5 py-2.5 text-sm font-medium text-white hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300"
                                                >
                                                    Edit
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $pendaftaran->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
