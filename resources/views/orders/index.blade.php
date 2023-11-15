<x-app-layout>
    <div class="flex flex-col">
        <h3 class="m-auto my-4 text-2xl font-bold">Basic Oversized T-Shirt</h3>

        <div class="border-2 border-gray-500 m-auto my-4">
            <img src="images/products/kaos.jpg" class="w-72 h-72">
            <form action="/checkout" method="post">
                @csrf
                <div>
                    <input type="number" name="qty" placeholder="Mau pesan berapa?">
                </div>
                <div>
                    <input type="text" name="name" placeholder="Nama kamu">
                </div>
                <div>
                    <input type="text" name="address" placeholder="Alamat kamu">
                </div>
                <div>
                    <input type="text" name="phone" placeholder="No. Hp">
                </div>
                <button type="submit" class="px-3 py-2 bg-slate-800 text-white">Checkout</button>
            </form>
        </div>
    </div>
</x-app-layout>