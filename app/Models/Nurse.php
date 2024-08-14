<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'division_id',
        'sex_id',
    ];
}
