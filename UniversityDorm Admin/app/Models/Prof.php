<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;

    public $table ='profs';

        protected $fillable = [
        'nom',
        'email',
        'passe',
    ];
}
