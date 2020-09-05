<?php

namespace DDPG\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Reports extends Model
{
    protected $table = 'reports';

    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
