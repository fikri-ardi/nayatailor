<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Psy\CodeCleaner\AssignThisVariablePass;

class ShowProduct extends Component
{
    public Product $product;
    public $qty = 1;

    public function increment()
    {
        $this->qty >= $this->product->stock ? $this->qty = $this->product->stock : $this->qty++;;
    }

    public function decrement()
    {
        $this->qty <= 1 ? $this->qty = 1 : $this->qty--;
    }

    public function render()
    {
        return view('livewire.show-product', [
            'subtotal' => $this->qty * $this->product->price
        ]);
    }
}
