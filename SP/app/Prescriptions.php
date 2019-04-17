<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    protected $fillable = ['name', 'dosage_amount', 'dosage_time', 'from_date', 'to_date', 'pacient_id', 'medication_id', 'additional_information'];
}
