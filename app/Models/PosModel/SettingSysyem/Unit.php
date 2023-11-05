<?php

namespace App\Models\PosModel\SettingSysyem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table = 'unit';
    protected $fillable = [
        'unitName',
        'unitSymbol',
    ];
}
