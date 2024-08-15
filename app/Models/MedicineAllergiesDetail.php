<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineAllergiesDetail extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'medicine_allergies_id',
        'medicine_id',
        'side_effect',
    ];

    public function medicineAllergies()
    {
        return $this->belongsTo(MedicineAllergy::class, 'medicine_allergies_id');
    }
}
