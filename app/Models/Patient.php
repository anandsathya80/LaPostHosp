<?php

namespace App\Models;

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

    public function sex()
    {
        return $this->belongsTo(Sex::class, 'sex_id');
    }

    public function medicineAllergies()
    {
        return $this->belongsTo(MedicineAllergy::class, 'medicine_allergy_id');
    }
}
