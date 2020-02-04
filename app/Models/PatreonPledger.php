<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatreonPledger extends Model
{
    public function getRespectPhraseAttribute()
    {
        return collect([
            "Thank your for your pledge",
            "You keep us motivated",
            "Behind this avatar: such a lovely person",
            "You sir/madam are awesome",
            "We eat our monthly pasta thanks to you",
            "Your actions are heart-warming",
        ])->random();
    }
}
