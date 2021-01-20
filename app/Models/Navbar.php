<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;
    protected $fillable = [
        'item1',
        'item2',
        'item3',
        'item4',
        'image'
    ];
}
