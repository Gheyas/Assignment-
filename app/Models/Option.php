<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $guarded = [];

    public function items(){
        return $this->hasMany(OptionItem::class);
    }
}
