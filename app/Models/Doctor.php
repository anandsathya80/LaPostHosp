<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    use HasUlids;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'sex_id',
        'division_id',
        'doctor_type_id',
    ];
}
