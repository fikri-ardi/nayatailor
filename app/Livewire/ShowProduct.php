<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Psy\CodeCleaner\AssignThisVariablePass;

class ShowProduct extends Component
{
    public Product $product;
    public $qty = 1;
    public $size_id;

    public function increment()
    {
        $this->qty >= $this->product->stock ? $this->qty = $this->product->stock : $this->qty++;;
    }

    public function decrement()
    {
        $this->qty <= 1 ? $this->qty = 1 : $this->qty--;
    }

    public function addToCart()
    {
        auth()->user()->carts()->create([
            'product_id' => $this->product->id,
            'size_id' => $this->size_id,
            'qty' => $this->qty,
        ]);
        $this->dispatch('product-added-to-cart')->to(Navigation::class);
    }

    public function render()
    {
        return view('livewire.show-product', [
            'subtotal' => $this->qty * $this->product->price
        ]);
    }
}
