<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'name',
        'identity_number',
        'phone_number',
        'address',
        'sex_id',
        'blood_type_id',
        'place_of_birth',
        'date_of_birth',
        'medicine_allergy_id',
    ];
}
