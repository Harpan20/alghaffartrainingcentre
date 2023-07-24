<x-frontend-layout>

    {{-- jumbotron --}}
    <section id="beranda" class="scroll-mt-20 bg-gray-700 bg-center bg-no-repeat bg-blend-multiply" style="background-image: url('{{ LinkImageHelper::check($slogan->gambar) }}');">
        <div class="mx-auto max-w-screen-xl px-4 py-24 text-center lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
                {{ $slogan->slogan }}
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 sm:px-16 lg:px-48 lg:text-xl">
                {{ $slogan->deskripsi }}
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#daftar" class="from-brand-default to-brand-secondary-default focus:ring-brand-default/50 inline-flex items-center justify-center rounded-lg bg-gradient-to-r py-3 px-5 text-center text-base font-medium text-white transition-all hover:bg-gradient-to-br focus:ring-4">
                    Daftar
                    <svg aria-hidden="true" class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#kelas" class="inline-flex items-center justify-center rounded-lg border border-white py-3 px-5 text-center text-base font-medium text-white hover:bg-gray-100 hover:text-gray-900 focus:ring-4 focus:ring-gray-400">
                    Lihat Kelas
                </a>
            </div>
        </div>
    </section>

    <div class="mx-auto flex max-w-screen-xl flex-col gap-10 p-10">

        {{-- gallery foto --}}
        <section class="scroll-mt-20 rounded-lg bg-white p-10" id="galeri">
            <h2 class="from-brand-default to-brand-secondary-default mb-10 bg-gradient-to-r bg-clip-text text-center text-3xl font-bold text-transparent md:text-4xl">
                Galeri Foto
            </h2>
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($galeriFoto as $item)
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ LinkImageHelper::check($item->gambar) }}" alt="{{ $item->nama }}">
                </div>
                @endforeach
            </div>
        </section>

        {{-- gallery Video --}}
        <!-- <section class="rounded-lg bg-white p-10">
            <h2
                class="from-brand-default to-brand-secondary-default mb-10 bg-gradient-to-r bg-clip-text text-center text-3xl font-bold text-transparent md:text-4xl">

                Galeri Video
            </h2>
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($galeriVideo as $item)
                    <div>
                        <iframe
                            class="aspect-video w-full rounded-lg"
                            src="{{ $item->video }}"
                            aria-details="{{ $item->nama }}"
                            title="{{ $item->nama }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        >
                        </iframe>
                    </div>
                @endforeach
            </div>
        </section> -->

        {{-- profil --}}
        <section class="scroll-mt-20 rounded-lg bg-white p-10" id="profil">
            <h2 class="from-brand-default to-brand-secondary-default mb-10 bg-gradient-to-r bg-clip-text text-center text-3xl font-bold text-transparent md:text-4xl">
                Profil
            </h2>
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-10">
                <img class="aspect-video w-full rounded-lg object-contain" src="{{ LinkImageHelper::check($profil->gambar) }}" alt="{{ $profil->nama_perusahaan }}">
                <div class="flex items-center justify-center">
                    <div class="space-y-4">
                        <h3 class="text-brand-default text-center text-2xl md:text-3xl lg:text-left">
                            {{ $profil->nama_perusahaan }}
                        </h3>
                        <p class="text-center text-base text-slate-900 md:text-lg lg:text-left">
                            {{ $profil->deskripsi }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Kontak --}}
            <div class="mt-10 grid grid-cols-1 gap-10 lg:grid-cols-4">
                <div class="flex flex-col rounded-lg bg-slate-50 p-5 lg:col-start-1">
                    <h3 class="from-brand-default to-brand-secondary-default bg-gradient-to-r bg-clip-text text-center text-xl font-bold text-transparent">
                        Lokasi
                    </h3>
                    <a href="{{ $profil->link_alamat }}" class="text-brand-default flex flex-grow flex-row items-center justify-center gap-2 text-base font-bold md:text-lg" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <p>
                            {{ $profil->alamat }}
                        </p>
                    </a>
                </div>
                <div class="flex flex-col rounded-lg bg-slate-50 p-5 lg:col-start-2">
                    <h3 class="from-brand-default to-brand-secondary-default bg-gradient-to-r bg-clip-text text-center text-xl font-bold text-transparent">
                        Kontak
                    </h3>
                    <a href="tel:62{{ $profil->no_hp }}" class="text-brand-default flex flex-grow flex-row items-center justify-center gap-2 font-bold" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>

                        <p>
                            +62{{ $profil->no_hp }}
                        </p>
                    </a>
                    <a href="mailto:{{ $profil->email }}" class="text-brand-default flex flex-grow flex-row items-center justify-center gap-2 font-bold" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-shrink-0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <p class="truncate">
                            {{ $profil->email }}
                        </p>
                    </a>
                </div>
                <div class="flex flex-col items-center gap-2 rounded-lg bg-slate-50 p-5 lg:col-start-3 lg:col-end-5">
                    <h3 class="from-brand-default to-brand-secondary-default bg-gradient-to-r bg-clip-text text-center text-xl font-bold text-transparent">
                        Sosial Media
                    </h3>
                    <ul class="flex flex-col flex-wrap justify-center gap-2 lg:flex-row">
                        <li>
                            <a class="text-brand-default flex flex-row items-center gap-2 text-base md:text-lg" href="{{ $profil->instagram }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg>
                                <p>
                                    Instagram
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="text-brand-default flex flex-row items-center gap-2 text-base md:text-lg" href="{{ $profil->facebook }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                                <p>
                                    Facebook
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="text-brand-default flex flex-row items-center gap-2 text-base md:text-lg" href="{{ $profil->tiktok }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                                </svg>
                                <p>
                                    Tiktok
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="text-brand-default flex flex-row items-center gap-2 text-base md:text-lg" href="{{ $profil->linkedin }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg>
                                <p>
                                    Linkedin
                                </p>
                            </a>
                        </li>
                        <li>
                            <a class="text-brand-default flex flex-row items-center gap-2 text-base md:text-lg" href="https//:wa.me/62{{ $profil->no_whatsapp }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 flex-shrink-0" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg>
                                <p>
                                    Whatsapp
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        {{-- kelas --}}
        <section class="scroll-mt-20 rounded-lg bg-white p-10" id="kelas">
            <h2 class="from-brand-default to-brand-secondary-default mb-10 bg-gradient-to-r bg-clip-text text-center text-3xl font-bold text-transparent md:text-4xl">
                Kelas
            </h2>
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($kelas as $item)
                <div class="flex flex-col rounded-lg border border-gray-200 bg-white shadow lg:max-w-sm">
                    <img class="aspect-square rounded-t-lg object-cover" src="{{ LinkImageHelper::check($item->gambar) }}" alt="{{ $item->nama }}" />
                    <div class="flex flex-grow flex-col gap-3 p-5">
                        <h5 class="text-2xl font-bold tracking-tight text-gray-900">
                            {{ $item->nama }}
                        </h5>
                        <div>
                            <a href="#" class="focus:ring-brand-default/50 from-brand-default to-brand-secondary-default inline-flex items-center rounded-lg bg-gradient-to-r px-3 py-2 text-center text-sm font-medium text-white hover:bg-gradient-to-br focus:outline-none focus:ring-4">
                                Daftar
                                <svg aria-hidden="true" class="ml-2 -mr-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>

                        <p class="font-normal text-gray-700">
                            {{ $item->deskripsi }}
                        </p>
                        <p class="from-brand-default to-brand-secondary-default flex flex-grow items-end bg-gradient-to-r bg-clip-text text-xl font-bold text-transparent md:text-2xl">

                            Rp {{ number_format($item->biaya, 2, ',', '.') }}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </section>

        {{-- pendaftaran --}}
        <section class="scroll-mt-20 rounded-lg bg-white p-10" id="daftar">
            <h2 class="from-brand-default to-brand-secondary-default mb-10 bg-gradient-to-r bg-clip-text text-center text-3xl font-bold text-transparent md:text-4xl">
                Pendaftaran
            </h2>

            <form action="{{ route('pendaftaran.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-6 grid gap-5 md:grid-cols-2">
                    <div>
                        <label for="nama" class="mb-2 block text-sm font-medium text-gray-900">
                            Nama
                        </label>
                        <input type="text" id="nama" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="Contoh : Indra Rizki" name="nama" required value="{{ old('nama') }}">
                        @error('nama')
                        <x-input-error-message>
                            {{ $message }}
                        </x-input-error-message>
                        @enderror
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="mb-2 block text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="date" id="tanggal_lahir" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" name="tanggal_lahir" placeholder="Masukkan tanggal lahir Anda" required value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                        <x-input-error-message>
                            {{ $message }}
                        </x-input-error-message>
                        @enderror
                    </div>

                </div>
                <div class="mb-6 grid gap-5 md:grid-cols-2">
                    <div>
                        <label for="no_telepon" class="mb-2 block text-sm font-medium text-gray-900">
                            No Telepon
                        </label>
                        <div class="relative">
                            <input type="number" id="no_telepon" class="block w-full rounded-lg border border-gray-300 bg-gray-50 py-2.5 pl-[calc(1.5rem_+_1rem)] pr-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="contoh: 87726777888" name="no_telepon" required value="{{ old('no_telepon') }}">
                            <span class="bg-brand-default absolute top-1/2 left-2.5 flex -translate-y-1/2 items-center justify-center rounded py-[2px] px-[3px] text-xs text-white">
                                +62
                            </span>
                        </div>
                        @error('no_telepon')
                        <x-input-error-message>
                            {{ $message }}
                        </x-input-error-message>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900">
                            Email
                        </label>
                        <input type="email" id="email" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="john.doe@company.com" name="email" required value="{{ old('email') }}">
                        @error('email')
                        <x-input-error-message>
                            {{ $message }}
                        </x-input-error-message>
                        @enderror
                    </div>
                </div>
                <div class="mb-6 grid gap-5 md:grid-cols-2">
                    <div>
                        <label for="alamat" class="mb-2 block text-sm font-medium text-gray-900">
                            Alamat
                        </label>
                        <input type="text" id="alamat" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" name="alamat" placeholder="Masukkan alamat Anda" required value="{{ old('alamat') }}">
                        @error('alamat')
                        <x-input-error-message>
                            {{ $message }}
                        </x-input-error-message>
                        @enderror
                    </div>
                    <div>
                        <label for="kelas" class="mb-2 block text-sm font-medium text-gray-900">
                            Kelas
                        </label>
                        <select id="kelas" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" name="kelas">
                            <option selected disabled>
                                Pilih Kelas
                            </option>
                            @foreach ($kelas as $item)
                            <option value="{{ $item->id }}" {{ $item->id == old('kelas') ? 'selected' : '' }}>
                                {{ $item->nama }}
                            </option>
                            @endforeach
                        </select>
                        @error('kelas')
                        <x-input-error-message>
                            {{ $message }}
                        </x-input-error-message>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="from-brand-default to-brand-secondary-default w-full rounded-lg bg-gradient-to-r px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-gradient-to-br focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">
                    Submit
                </button>
            </form>
        </section>
    </div>

    @if (session()->has('success'))
    <x-toast-success message="{{ session()->get('success') }}" />
    @endif

    @if ($errors->any())
    <x-toast-danger message="Gagal Menyimpan!" />
    @endif

    @if ($errors->any())
    @push('scripts')
    <script>
        (function() {
            document.getElementById("daftar").scrollIntoView({
                behavior: 'smooth'
            }, true);
        })()
    </script>
    @endpush
    @endif
</x-frontend-layout>