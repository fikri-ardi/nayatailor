<div>
    <x-blur class="bg-yellow-500 top-0 -left-20 bg-opacity-50"></x-blur>

    {{-- Carousel --}}
    <div x-data="Slider" x-on:mouseenter="whenHoverCarousel = true" x-on:mouseleave="whenHoverCarousel = false" class="relative">
        {{-- Carousel Container --}}
        <div class="overflow-x-scroll rounded-xl my-7" x-ref="slider">
            <div class="flex w-[500%] h-96">
                <img x-ref="sliderContent" class="size-full object-cover object-center"
                    src="https://images.ctfassets.net/9q8du028z7sn/4Igg7wBOPfQy4Lhmjrvh38/0b6e254bd8398c8d0d7b3e76c99f20b0/2024-CW10-Men-CU5-w10cu4zalocalvou20-1-dsk.jpg">
                <img class="size-full object-cover object-center"
                    src="https://images.ctfassets.net/9q8du028z7sn/XHAlZfYuIHjbh9vEFMoOb/3902de1585bceccb206d267cca747e58/2024-CW10-Men-CU3-w10cu3houseofcuff-1-dsk.jpg">
                <img class="size-full object-cover object-center"
                    src="https://images.ctfassets.net/9q8du028z7sn/343BQYRdKXhzyIkRucU09u/04cf527839b636228c08285fe2398b42/1920x725_HERO_CUEARTHEDIT_50VC25.jpg">
                <img class="size-full object-cover object-center"
                    src="https://images.ctfassets.net/9q8du028z7sn/262zoGDVJlikcXuqjMvLVH/028a50ae0d1bcaf5d061f1f5757e59b1/2024-CW10-Men-CU1-w10cu1bestvou24-1-dsk.jpg">
                <img class="size-full object-cover object-center"
                    src="https://images.ctfassets.net/9q8du028z7sn/zcaq2TgJvVguqeEVmiHpA/1b14eb91260d66bd697f9364e4422105/N1_ENTRYSTATIC_03.gif">
            </div>
        </div>
        {{-- Carousel Controller --}}
        <div x-on:click="prev" :class="whenHoverCarousel ? '-translate-x-full opacity-100' : ''"
            class="absolute left-5 top-0 h-full flex items-center opacity-0 transition-all ease-in-out duration-500">
            <button class="bg-white text-slate-700 backdrop-blur-sm shadow-lg size-10 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>
        <div x-on:click="next" :class="whenHoverCarousel ? 'translate-x-full opacity-100' : ''"
            class="absolute right-5 top-0 h-full opacity-0 flex items-center transition-all ease-in-out duration-500">
            <button class="bg-white text-slate-700 backdrop-blur-sm shadow-lg size-10 flex items-center justify-center rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Product List --}}
    <section>
        <div class="grid grid-cols-4 gap-7">
            @foreach ($products as $product)
            <a wire:navigate x-data="{imageUrl: '{{ $product->media()->first()->url }}'}" x-on:mouseenter="imageUrl = '{{ $product->media[2]->url }}'"
                x-on:mouseleave="imageUrl = '{{ $product->media()->first()->url }}'" href="{{ route('products.show', $product->id) }}">
                <div class="w-full">
                    <div class="h-96 rounded-xl overflow-hidden hover:bg-black transition-all duration-500">
                        <img x-bind:src="imageUrl" class="w-full h-full object-cover" alt="{{ $product->name }}">
                    </div>
                    <div class="p-2 mt-1">
                        <div class="flex items-center justify-between">
                            <div class="font-semibold">{{ str(ucwords(($product->name)))->words(2, '') }}</div>

                            {{-- Wishlist button --}}
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor"
                                    class="w-5 h-5 text-slate-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-slate-700">{{ str($product->detail)->ucfirst()->words(3) }}</div>
                        <div class="font-bold text-lg text-yellow-600">Rp {{ number_format($product->price, 0, 0,'.') }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</div>