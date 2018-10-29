<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    public function starsWidget()
    {
        return view('widget.stars', ['stars' => $this->stars]);
    }
}
