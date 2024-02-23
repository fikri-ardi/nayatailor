<div class="flex justify-between space-x-5">
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

        <div class="my-6 font-semibold text-xl">
            Rp {{ $product->price }}
        </div>

        <div class="my-6">
            <div class="font-semibold text-xl mb-3">Ukuran</div>
            <div x-data="{checked: false}" class="flex space-x-1">
                @foreach ($product->sizes as $size)
                <label for="{{ $size->id }}" x-on:click="checked = {{ $size->id }}"
                    :class="checked == {{ $size->id }} ? '!text-yellow-500 !border-yellow-500 !bg-yellow-100' : ''"
                    class="hover:cursor-pointer px-2 py-2 w-14 flex justify-center hover:text-yellow-500 hover:border-yellow-500 border border-slate-500 text-slate-500 rounded-lg">
                    <input class="hidden" x-bind:checked="checked == {{ $size->id }}" type="radio" name="size_id" id="{{ $size->id }}"
                        value="{{ $size->id }}">
                    <span class="font-semibold">{{ $size->name }}</span>
                </label>
                @endforeach
            </div>
        </div>

        <div class="my-6 font-semibold text-xl border border-slate-500 rounded-lg">
            <div>Atur jumlah dan catatan</div>
        </div>
    </div>
</div>