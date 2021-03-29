<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionItem extends Model
{
    protected $guarded = [];

    public function option(){
        return $this->belongsTo(Option::class);
    }
}
