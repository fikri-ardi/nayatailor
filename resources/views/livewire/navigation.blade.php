<div>
    {{-- Desktop Navigation Menu --}}
    <nav class="fixed w-full bg-white z-50">
        <div class="flex justify-center bg-gray-100">
            <div class="flex justify-end sm:w-11/12">
                <ul class="hidden sm:flex items-center text-slate-600 font-semibold py-1">
                    @foreach ($links as $name => $link)
                    <li>
                        <small>
                            <a href="{{ $link['route'] }}" class="px-3 py-1 inline-block hover:text-yellow-500 active:text-yellow-500 transition">{{
                                $name
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

                {{-- User Notification --}}
                <div class="flex items-center space-x-10">
                    <div class="flex items-center space-x-1">
                        {{-- Cart --}}
                        <div x-data="{dropdownCart: false}" x-on:mouseenter="dropdownCart = true" x-on:mouseleave="dropdownCart = false"
                            class="relative flex items-center justify-center p-2 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            @auth
                            @if (auth()->user()->carts)
                            <div
                                class="absolute flex items-center justify-center top-0 right-0 bg-red-500 text-white font-semibold text-xs w-4 h-4 border-2 box-content border-white rounded-full">
                                {{ count(auth()->user()->carts) }}
                            </div>
                            @endif
                            @endauth

                            {{-- Dropdown Cart --}}
                            <div x-show="dropdownCart" x-transition.origin.top
                                class="absolute top-full mx-auto w-96 rounded-2xl shadow-xl bg-white px-4 py- max-h-96 overflow-scroll divide-y divide-slate-200">
                                <div class="flex items-center justify-between py-2">
                                    <div class="font-semibold text-lg">Tas ({{ auth()->user() && auth()->user()->carts ? count(auth()->user()->carts)
                                        : ''
                                        }})</div>
                                    <a href="#" class="flex text-yellow-500 items-center py-1 px-3 hover:bg-slate-100 rounded-md">
                                        Lihat
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                        </svg>
                                    </a>
                                </div>

                                {{-- Cart Product --}}
                                <div>
                                    @auth
                                    @if (auth()->user()->carts)
                                    @foreach (auth()->user()->carts as $cart)
                                    <div class="flex items-center space-x-3 my-3">
                                        <div class="w-4/12 h-28 overflow-hidden">
                                            <img class="object-cover w-full h-full" src="{{ $cart->product->media->first()->url }}">
                                        </div>
                                        <div>
                                            <div>{{ ucwords($cart->product->name) }}</div>
                                            <div class="text-slate-500">Ukuran: {{ $cart->size->name }}</div>
                                            <div class="font-bold">Rp {{ number_format($cart->product->price, 0,0, '.') }}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    @endauth
                                </div>
                            </div>
                        </div>

                        {{-- Notification --}}
                        <div class="relative flex items-center justify-center p-2 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                            </svg>
                            <div
                                class="absolute flex items-center justify-center top-0 right-0 bg-red-500 text-white font-semibold text-xs w-4 h-4 border-2 box-content border-white rounded-full">
                                2
                            </div>
                        </div>

                        {{-- Chat--}}
                        <div class="relative flex items-center justify-center p-2 rounded-lg hover:bg-slate-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                            </svg>
                            <div
                                class="absolute flex items-center justify-center top-0 right-0 bg-red-500 text-white font-semibold text-xs w-4 h-4 border-2 box-content border-white rounded-full">
                                5
                            </div>
                        </div>
                    </div>

                    @auth
                    <div x-data="{userProfile: false}" x-on:mouseenter="userProfile = true" x-on:mouseleave="userProfile = false"
                        class="relative flex items-center p-2 rounded-md space-x-1 cursor-pointer hover:bg-slate-100 transition-all">
                        <div>
                            @if (auth()->user()->media)
                            <img src="#">
                            @else
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </div>
                            @endif
                        </div>
                        <div class="font-semibold">{{ auth()->user()->name }}</div>

                        {{-- Dropdown --}}
                        <div x-show="userProfile" x-transition class="absolute z-50 bg-white w-80 py-4 shadow-xl right-0 top-full rounded-2xl">

                            {{-- Dropdown Menu --}}
                            <div class="flex items-center py-3 px-4 space-x-3 rounded-md hover:bg-slate-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <div>Pembelian</div>
                            </div>
                            <div class="flex items-center py-3 px-4 space-x-3 rounded-md hover:bg-slate-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                                <div>Whishlist</div>
                            </div>
                            <div class="flex items-center py-3 px-4 space-x-3 rounded-md hover:bg-slate-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                                </svg>
                                <div>Pengaturan</div>
                            </div>
                            <div class="flex items-center py-3 px-4 space-x-3 rounded-md hover:bg-slate-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                </svg>
                                <div>Keluar</div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="flex item-center space-x-2">
                        <x-button-link href="{{ route('login') }}" class="text-sm border border-yellow-500 !bg-white !text-yellow-500">Masuk
                        </x-button-link>
                        <x-button-link href="{{ route('register') }}" class="text-sm">Daftar</x-button-link>
                    </div>
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
</div>