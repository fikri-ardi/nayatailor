<x-app-layout>
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

    <section class="min-h-screen flex justify-between">
        <div class="card bg-red-500 w-64 h-96 rounded-2xl"></div>
    </section>

</x-app-layout>