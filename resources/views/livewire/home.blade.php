<div>
    <x-blur class="bg-yellow-500 top-0 -left-20 bg-opacity-50"></x-blur>

    {{-- Carrousel --}}
    <div class="min-h-screen flex items-center justify-center -mt-20">
        <div class="flex sm:flex-row flex-col-reverse rounded-xl">
            <div class="mr-2 space-y-6 flex flex-col justify-center mt-4 sm:mt-0">
                <h1 class="text-2xl sm:text-4xl font-bold text-slate-900">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. </h1>
                <p class="text-slate-500 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore voluptatum deserunt
                    molestias
                    saepe voluptatem recusandae quos
                    quas
                    quae. Debitis, architecto.</p>

                <div class="text-center sm:text-left">
                    <x-button-link href="#">Order Now</x-button-link>
                </div>
            </div>
            <div
                class="h-52 sm:h-96 sm:w-10/12 flex items-center justify-center text-slate-900 bg-gradient-to-l from-slate-300 bg-opacity-5 rounded-xl backdrop-blur-xl">
                <div class="relative">
                    <i class="absolute bi bi-stars text-3xl -top-3 -right-3"></i>
                    <i class="bi bi-bag-heart-fill text-9xl"></i>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="grid grid-cols-4 gap-7">
            @foreach ($products as $product)
            <a wire:navigate href="{{ route('products.show', $product->id) }}">
                <div class="w-full">
                    <div class="h-96 rounded-2xl overflow-hidden hover:bg-black transition-all duration-500">
                        <img class="w-full h-full object-cover hover:opacity-70 hover:scale-105 transition-all duration-500"
                            src="{{ $product->media()->first()->url }}" alt="{{ $product->name }}">
                    </div>
                    <div class="p-2 mt-1">
                        <div class="font-semibold text-lg">{{ str(ucwords(($product->name)))->words(4) }}</div>
                        <div class="text-slate-8">{{ str($product->detail)->ucfirst()->words(4) }}</div>
                        <div class="font-bold text-lg text-yellow-600">Rp {{ $product->price }}</div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</div>