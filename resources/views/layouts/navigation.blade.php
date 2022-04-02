<nav class="fixed w-full sm:py-5 py-3 bg-black bg-opacity-5 z-50 backdrop-blur-lg">
    <div class="flex items-center justify-between sm:w-4/6 w-5/6 mx-auto">
        {{-- Navbar Brand --}}
        <a href="{{ route('home') }}" class="text-yellow-500 font-bold text-3xl">Naya.</a>

        {{-- Primary Navigation Menu --}}
        <ul class="hidden sm:flex items-center text-slate-600 font-semibold">
            @foreach ($links as $name => $link)
            <li><a href="{{ $link['route'] }}" class="px-3 py-2 inline-block hover:-translate-y-1 active:-translate-y-1 transition">{{ $name }}</a>
            </li>
            @endforeach
        </ul>

        {{-- Action Button --}}
        <x-button-link href="#">Buy Now</x-button-link>
    </div>

</nav>

<nav class="fixed bottom-0 w-full">
    {{-- Reponsive Navigation Menu --}}
    <ul class="flex sm:hidden items-center justify-center text-slate-600 font-semibold bg-black bg-opacity-5 backdrop-blur-lg">
        @foreach ($links as $name => $link)
        <li><a href="{{ $link['route'] }}" class="px-3 py-2 inline-block hover:-translate-y-1 active:-translate-y-1 transition">{{ $name }}</a>
        </li>
        @endforeach
    </ul>
</nav>