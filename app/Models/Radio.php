<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    use HasFactory;

    protected $fillable = [
     'form_id'
    ];

    public function form()
    {
        return $this->belongsToMany(Form::class);
    }
}
