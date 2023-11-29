<?php

namespace App\Traits;

use App\Models\User;

trait HasChatFeature
{
    public function chats()
    {
        return $this->belongsToMany(User::class, 'chats', 'user_id', 'chats_to_user_id')->withTimestamps();
    }
}
