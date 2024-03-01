<x-app-layout>
    <div class="flex flex-col">
        <h3 class="m-auto my-4 text-2xl font-bold">Invoice</h3>

        <div class="border-2 border-gray-500 m-auto my-4">
            <table>
                <tr>
                    <td>Nama :</td>
                    <td>{{ $order->user->name }}</td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td>{{ $order->address->name }}</td>
                </tr>
                <tr>
                    <td>No. HP :</td>
                    <td>{{ $order->user->phone }}</td>
                </tr>
                <tr>
                    <td>Total Harga :</td>
                    <td>{{ $order->gross_amount }}</td>
                </tr>
                <tr>
                    <td>Status :</td>
                    <td>{{ $order->status }}</td>
                </tr>
            </table>
        </div>
    </div>
</x-app-layout>