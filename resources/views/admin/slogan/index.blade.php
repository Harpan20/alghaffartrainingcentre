<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Slogan') }}
        </h2>
        <a
            href="{{ route('admin.slogan.edit', $slogan->id) }}"
            class="rounded-lg bg-yellow-400 px-5 py-2.5 text-sm font-medium text-white hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900"
        >
            Edit
        </a>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="flex flex-col gap-6 p-6">
                    <img
                        class="max-h-[20rem] w-full rounded-lg object-cover"
                        src="{{ LinkImageHelper::check($slogan->gambar) }}"
                        alt="{{ $slogan->slogan }}"
                    >
                    <h3 class="text-brand-default text-2xl md:text-3xl">
                        {{ $slogan->slogan }}
                    </h3>
                    <p class="text-base text-slate-900">
                        {{ $slogan->deskripsi }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <x-toast-danger message="Gagal Menyimpan!" />
    @endif

</x-app-layout>
