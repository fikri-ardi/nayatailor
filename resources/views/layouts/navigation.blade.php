{{-- Desktop Navigation Menu --}}
<nav class="fixed w-full bg-white z-50">
    <div class="flex justify-center bg-gray-100">
        <div class="flex justify-end sm:w-11/12">
            <ul class="hidden sm:flex items-center text-slate-600 font-semibold py-1">
                @foreach ($links as $name => $link)
                <li>
                    <small>
                        <a href="{{ $link['route'] }}" class="px-3 py-1 inline-block hover:text-yellow-500 active:text-yellow-500 transition">{{ $name
                            }}</a>
                    </small>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="flex flex-col justify-between w-10/12 sm:w-11/12 mx-auto py-3">
        <div class="flex items-center justify-between">
            {{-- Navbar Brand --}}
            <a href="{{ route('home') }}" class="text-yellow-500 font-bold text-3xl">{{ config('app.name') }}</a>
            {{-- Search Bar --}}
            <div class="w-6/12">
                <form>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ml-3">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-3 pl-9 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-yellow-500 focus:border-yellow-500 "
                            placeholder="Cari di Nayatailor" required>
                    </div>
                </form>
            </div>

            {{-- Action Button --}}
            <div class="space-x-3">
                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <x-button class="text-sm">Logout</x-button>
                </form>
                @else
                <x-button-link href="{{ route('login') }}" class="text-sm border border-yellow-500 !bg-white !text-yellow-500">Masuk</x-button-link>
                <x-button-link href="{{ route('register') }}" class="text-sm">Daftar</x-button-link>
                @endauth
            </div>
        </div>
    </div>

</nav>

{{-- Mobile Navigation Menu --}}
<nav class="fixed bottom-0 w-full">
    <ul class="flex sm:hidden items-center justify-center text-slate-600 font-semibold bg-black bg-opacity-5 backdrop-blur-lg">
        @foreach ($links as $name => $link)
        <li><a href="{{ $link['route'] }}" class="px-3 py-2 inline-block hover:-translate-y-1 active:-translate-y-1 transition">{{ $name }}</a>
        </li>
        @endforeach
    </ul>
</nav>