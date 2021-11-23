<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

    protected $table = 'guide';
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'guia',
    ];
}