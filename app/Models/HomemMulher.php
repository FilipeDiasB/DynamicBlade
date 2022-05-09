<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomemMulher extends Model
{
    use HasFactory;

    protected $fillable = [
      'homem_input',
      'mulher_input',
      'mulher',
      'homem',
    ];
}
