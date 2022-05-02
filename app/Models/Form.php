<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public function inputs()
    {
        return $this->hasMany(Input::class);
    }

    public function radios()
    {
        return $this->hasMany(Radio::class);
    }
}
