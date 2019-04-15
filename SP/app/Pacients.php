<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacients extends Model
{
    protected $fillable = ['name', 'surname', 'age', 'height', 'weight', 'condition', 'additional_information'];
}