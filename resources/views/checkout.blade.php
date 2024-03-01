<x-app-layout>
  <x-slot name="head">
    <script type="text/javascript" src="{{ config('midtrans.snap_url') }}" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </x-slot>

  <div class="flex flex-col">
    <h3 class="m-auto my-4 text-2xl font-bold">Detail Pesanan</h3>

    <div class="border-2 border-gray-500 m-auto my-4">
      <img src="images/products/kaos.jpg" class="w-72 h-72">
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
      </table>
      <button class="px-3 py-2 bg-slate-800 text-white" id="pay-button">Bayar</button>
    </div>
  </div>

  <div class="fixed top-24 left-32">
    <div id="snap-container" class="m-auto"></div>
  </div>

  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
          // Also, use the embedId that you defined in the div above, here.
          window.snap.embed('{{ $snapToken }}', {
            embedId: 'snap-container',
            onSuccess: function (result) {
              /* You may add your own implementation here */
              window.location.href = 'invoice/{{ $order->id }}'
            },
            onPending: function (result) {
              /* You may add your own implementation here */
              alert("waiting your payment!"); console.log(result);
            },
            onError: function (result) {
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function () {
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          });
        });
  </script>
</x-app-layout>