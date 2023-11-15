<x-app-layout>
    <div class="flex flex-col">
        <h3 class="m-auto my-4 text-2xl font-bold">Invoice</h3>

        <div class="border-2 border-gray-500 m-auto my-4">
            <table>
                <tr>
                    <td>Nama :</td>
                    <td>{{ $order->name }}</td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td>{{ $order->address }}</td>
                </tr>
                <tr>
                    <td>No. HP :</td>
                    <td>{{ $order->phone }}</td>
                </tr>
                <tr>
                    <td>Total Harga :</td>
                    <td>{{ $order->total_price }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $order->status }}</td>
                </tr>
            </table>
        </div>
    </div>
</x-app-layout>