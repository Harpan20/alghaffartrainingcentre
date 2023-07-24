<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Tambah Video ke Galeri') }} {{ $galeriVideo->nama }}
        </h2>
        <a
            href="{{ route('admin.galeri.video.index') }}"
            class="rounded-lg border border-gray-200 bg-white py-2.5 px-5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700"
        >Kembali</a>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6">
                    <form
                        action="{{ route('admin.galeri.video.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        novalidate
                    >
                        @csrf
                        <div class="mb-6">
                            <label
                                for="nama"
                                class="mb-2 block text-sm font-medium text-gray-900"
                            >
                                Nama
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                type="text"
                                id="nama"
                                name="nama"
                                placeholder="Masukkan nama kelas"
                                value="{{ old('nama', $galeriVideo->nama) }}"
                                required
                            >
                            @error('nama')
                                <x-input-error-message>
                                    {{ $message }}
                                </x-input-error-message>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label
                                for="video"
                                class="mb-2 block text-sm font-medium text-gray-900"
                            >
                                Link Video
                            </label>
                            <input
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                type="text"
                                id="video"
                                name="video"
                                placeholder="Masukkan link embed video dari youtube"
                                value="{{ old('video', $galeriVideo->video) }}"
                                required
                            >
                            @error('video')
                                <x-input-error-message>
                                    {{ $message }}
                                </x-input-error-message>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="mr-2 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <x-toast-success message="{{ session()->get('success') }}" />
    @endif

    @if ($errors->any())
        <x-toast-danger message="Gagal Menyimpan!" />
    @endif

</x-app-layout>
