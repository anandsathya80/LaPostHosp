<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMedicines extends Model
{
    use HasFactory;
    use HasUuids;
     protected $fillable = [
        'medical_check_id',
        'medicine_id',
        'qty',
        'notes',
     ];
}
