<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        foreach (User::first()->chats as $chat) {
            dd($chat->pivot->body);
        }

        return view('home');
    }
}
