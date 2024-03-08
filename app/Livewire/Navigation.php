<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Navigation extends Component
{
    #[On('product-added-to-cart', 'refresh')]

    public function render()
    {
        $links = [
            'Tentang Nayatailor' => [
                'route' => route('about')
            ],
            'Promo' => [
                'route' => route('home') . '#Contact'
            ],
            'Nayatailor Care' => [
                'route' => route('home') . '#About'
            ]
        ];

        return view('livewire.navigation', compact('links'));
    }
}
