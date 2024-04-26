<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

        public  $table = "chambre";

        protected $fillable = [
        'name',
        'capacite',
        'photo',
        'message',
        'residence',
        'block',
    ];
}
