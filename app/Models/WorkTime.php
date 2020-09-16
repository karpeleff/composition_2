<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    protected $fillable = ['date_start','date_stop','des_select','type_select'];
}
