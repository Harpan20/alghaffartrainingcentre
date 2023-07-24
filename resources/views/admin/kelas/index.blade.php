<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Kelas') }}
        </h2>
        <a
            href="{{ route('admin.kelas.create') }}"
            class="rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
        >
            Tambah
        </a>
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
                                        Nama Kelas
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-3"
                                    >
                                        Biaya
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
                                @foreach ($kelas as $item)
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
                                            Rp {{ number_format($item->biaya, '2', ',', '.') }}
                                        </td>
                                        <td class="w-20 max-w-xs px-6 py-4 text-right">
                                            <div class="flex flex-row gap-2">
                                                <a
                                                    href="{{ route('admin.kelas.show', $item->id) }}"
                                                    class="rounded-lg border border-gray-200 bg-white py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200"
                                                >
                                                    Lihat
                                                </a>
                                                <a
                                                    href="{{ route('admin.kelas.edit', $item->id) }}"
                                                    class="rounded-lg bg-yellow-400 px-5 py-2.5 text-sm font-medium text-white hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300"
                                                >
                                                    Edit
                                                </a>
                                                <button
                                                    data-modal-target="popup-modal-{{ $item->id }}"
                                                    data-modal-toggle="popup-modal-{{ $item->id }}"
                                                    type="button"
                                                    class="rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300"
                                                >
                                                    Hapus
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $kelas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($kelas as $item)
        <div
            id="popup-modal-{{ $item->id }}"
            tabindex="-1"
            class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] max-h-full overflow-y-auto overflow-x-hidden p-4 md:inset-0"
        >
            <div class="relative max-h-full w-full max-w-md">
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <button
                        type="button"
                        class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-800 dark:hover:text-white"
                        data-modal-hide="popup-modal-{{ $item->id }}"
                    >
                        <svg
                            aria-hidden="true"
                            class="h-5 w-5"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg
                            aria-hidden="true"
                            class="mx-auto mb-4 h-14 w-14 text-gray-400 dark:text-gray-200"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            ></path>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                            Apakh anda yakin akan menghapus data ini?
                        </h3>
                        <form
                            action="{{ route('admin.kelas.destroy', $item->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method('delete')
                            <button
                                data-modal-hide="popup-modal-{{ $item->id }}"
                                type="submit"
                                class="mr-2 inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800"
                            >
                                Iya
                            </button>

                            <button
                                data-modal-hide="popup-modal-{{ $item->id }}"
                                type="button"
                                class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-500 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-600"
                            >
                                Tidak
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @if (session()->has('deleted'))
        <x-toast-success message="{{ session()->get('deleted') }}" />
    @endif

    @if ($errors->any())
        <x-toast-danger message="Gagal Menyimpan!" />
    @endif

</x-app-layout>
