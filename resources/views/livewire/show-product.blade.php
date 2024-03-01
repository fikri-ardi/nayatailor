<div class="flex justify-between space-x-10">
    {{-- Carousel --}}
    <div class="w-7/12 grid grid-cols-2 gap-2">
        @foreach ($product->media as $media)
        <div class="rounded-md overflow-hidden">
            <img class="w-full h-full object-cover" src="{{ $media->url }}" alt="{{ $product->name }}">
        </div>
        @endforeach
    </div>

    {{-- Order Info --}}
    <div class="w-5/12">
        <div class="my-6">
            <h2 class="text-2xl">{{ ucwords($product->name) }}</h2>
            <p class="text-slate-700 leading-relaxed">{{ str($product->detail)->ucfirst() }}</p>
        </div>

        {{-- Price --}}
        <div class="my-6 font-semibold text-xl">
            Rp {{ $product->price }}
        </div>

        {{-- Size --}}
        <div class="my-6">
            <div class="font-semibold text-xl mb-3">Ukuran</div>
            <div x-data="{checked: false}" class="flex space-x-1">
                @foreach ($product->sizes as $size)
                <label for="{{ $size->id }}" x-on:click="checked = {{ $size->id }}"
                    :class="checked == {{ $size->id }} ? '!text-yellow-500 !border-yellow-500 !bg-yellow-100' : ''"
                    class="hover:cursor-pointer px-2 py-2 w-14 flex justify-center hover:text-yellow-500 hover:border-yellow-500 border border-slate-400 text-slate-400 rounded-lg">
                    <input class="hidden" x-bind:checked="checked == {{ $size->id }}" type="radio" name="size_id" id="{{ $size->id }}"
                        value="{{ $size->id }}">
                    <span class="font-semibold">{{ $size->name }}</span>
                </label>
                @endforeach
            </div>
        </div>

        {{-- Quantity and Notes --}}
        <div class="my-6 px-4 py-4 flex flex-col space-y-4 border border-slate-300 rounded-lg max-w-80">
            <div class="font-semibold text-xl">Atur jumlah dan catatan</div>

            {{-- Quantity --}}
            <div class="flex items-center">
                <div x-data="{qty: 1}" class="relative flex items-center max-w-[8rem]">
                    <button type="button" x-on:click="qty <= 1 ? qty = 1 : qty--"
                        class=" hover:bg-gray-100 border border-gray-300 rounded-s-lg p-3 h-11 focus:ring-gray-100 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-yellow-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" x-model="qty"
                        class="font-semibold text-base border-x-0 border-gray-300 h-11 text-center text-gray-900 focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 "
                        placeholder="1" min="1" required />
                    <button type="button" x-on:click="qty++"
                        class="hover:bg-gray-100 border border-gray-300 rounded-e-lg p-3 h-11 focus:ring-gray-100  focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-yellow-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>
                <div class="ml-2">Stock : <b>{{ $product->stock }}</b></div>
            </div>

            {{-- Order Notes --}}
            <div x-data="{showNote: false}">
                <input x-show="showNote" type="text"
                    class="block w-full mb-3 text-gray-900 border border-gray-300 rounded-lg focus:ring-0 focus:border-yellow-500 "
                    placeholder="Contoh: Warna Putih, Size M" required />
                <button x-on:click="showNote = ! showNote" class="font-semibold text-yellow-500 flex items-center space-x-1">
                    <svg x-show="!showNote" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                    </svg>
                    <span x-text="showNote ? 'Batalkan Catatan' : 'Tambah Catatan' " class="text-sm">
                        Tambah Catatan
                    </span>
                </button>
            </div>

            {{-- Subtotal --}}
            <div class="flex justify-between items-center">
                <div class="text-slate-500">Subtotal</div>
                <div class="font-semibold  text-2xl">Rp100.000</div>
            </div>

            {{-- Buy or Cart --}}
            <div class="flex justify-between items-center space-x-2">
                <div class="w-full">
                    <x-button class="w-full !bg-white text-yellow-500 border border-yellow-500">Beli</x-button>
                </div>
                <div class="w-full">
                    <x-button class="w-full" href="#">+ Keranjang</x-button>
                </div>
            </div>

            {{-- Chat, Wishlist, Share--}}
            <div class="flex justify-between divide-x divide-slate-300">
                <button class="flex items-center justify-center w-full space-x-1 text-sm font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                    </svg>
                    <div>Chat</div>
                </button>
                <button class="flex items-center justify-center w-full space-x-1 text-sm font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                    </svg>
                    <div>Wishlist</div>
                </button>
                <button class="flex items-center justify-center w-full space-x-1 text-sm font-semibold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                    </svg>
                    <div>Share</div>
                </button>
            </div>
        </div>
    </div>
</div>