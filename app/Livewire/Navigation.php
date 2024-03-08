<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
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
