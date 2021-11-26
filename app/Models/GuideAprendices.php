<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideAprendices extends Model
{
    use HasFactory;

    protected $table = 'guide_has_apperentices';
    protected $primaryKey = 'id';

    protected $fillable = [
        'guide_id',
        'apperentices_id',
    ];
}
