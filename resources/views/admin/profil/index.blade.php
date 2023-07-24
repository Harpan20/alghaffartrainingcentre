<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Profil') }}
        </h2>
        <a
            href="{{ route('admin.profil.edit', $profil->id) }}"
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
                        src="{{ LinkImageHelper::check($profil->gambar) }}"
                        alt="{{ $profil->nama_perusahaan }}"
                    >
                    <h3 class="text-brand-default text-2xl md:text-3xl">
                        {{ $profil->nama_perusahaan }}
                    </h3>
                    <p class="text-base text-slate-900">
                        {{ $profil->deskripsi }}
                    </p>
                    {{-- Lokasi --}}
                    <div>
                        <h3
                            class="from-brand-default to-brand-secondary-default w-fit bg-gradient-to-r bg-clip-text text-xl font-bold text-transparent">
                            Lokasi
                        </h3>
                        <ul>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Nama:
                                </span>
                                <span class="text-slate-900">
                                    {{ $profil->alamat }}
                                </span>
                            </li>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Link Lokasi:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="{{ $profil->link_alamat }}"
                                >{{ $profil->link_alamat }}</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Kontak --}}
                    <div>
                        <h3
                            class="from-brand-default to-brand-secondary-default w-fit bg-gradient-to-r bg-clip-text text-xl font-bold text-transparent">
                            Kontak
                        </h3>
                        <ul>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    No Hp:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="tel:{{ $profil->no_hp }}"
                                >{{ $profil->no_hp }}</a>
                            </li>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Email:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="mailto:{{ $profil->email }}"
                                >{{ $profil->email }}</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Sosial Media --}}
                    <div>
                        <h3
                            class="from-brand-default to-brand-secondary-default w-fit bg-gradient-to-r bg-clip-text text-xl font-bold text-transparent">
                            Sosial Media
                        </h3>
                        <ul>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Instagram:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="{{ $profil->instagram }}"
                                    target="_blank"
                                >{{ $profil->instagram }}</a>
                            </li>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Facebook:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="{{ $profil->facebook }}"
                                    target="_blank"
                                >{{ $profil->facebook }}</a>
                            </li>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Tiktok:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="{{ $profil->tiktok }}"
                                    target="_blank"
                                >{{ $profil->tiktok }}</a>
                            </li>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Linkedin:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="{{ $profil->linkedin }}"
                                    target="_blank"
                                >{{ $profil->linkedin }}</a>
                            </li>
                            <li>
                                <span class="text-bold text-brand-default text-lg">
                                    Whatsapp:
                                </span>
                                <a
                                    class="text-slate hover:text-blue-500"
                                    href="https://wa.me/62{{ $profil->no_whatsapp }}"
                                    target="_blank"
                                >https://wa.me/62{{ $profil->no_whatsapp }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <x-toast-danger message="Gagal Menyimpan!" />
    @endif

</x-app-layout>
