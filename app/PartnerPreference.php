<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerPreference extends Model
{
    protected $fillable = [
        'user_id',
        'expected_min_income',
        'expected_max_income',
        'occupation',
        'family_type',
        'manglik',
    ];
}
