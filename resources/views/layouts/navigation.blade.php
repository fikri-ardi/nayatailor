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
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="text-gray-500 w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-3 pl-9 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-0 focus:border-yellow-500 "
                            placeholder="Cari di Nayatailor" required />
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