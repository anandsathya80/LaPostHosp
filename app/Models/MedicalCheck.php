<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCheck extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'reservation_id',
        'problem',
        'diagnose',
        'diagnoses_result',
        'notes',
    ];
}
