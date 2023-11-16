<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navigation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $links = [
            'Tentang Nayatailor' => [
                'route' => route('home') . '#Contact'
            ],
            'Promo' => [
                'route' => route('home') . '#Contact'
            ],
            'Nayatailor Care' => [
                'route' => route('home') . '#About'
            ]
        ];

        return view('layouts.navigation', compact('links'));
    }
}
