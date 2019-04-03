<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = ['name', 'daily_limit', 'pain_level', 'dosage_instructions'];
}
