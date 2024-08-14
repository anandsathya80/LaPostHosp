<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'medicine_type_id',
        'medicine_name',
        'weight',
        'volume',
        'stock',
    ];
}
