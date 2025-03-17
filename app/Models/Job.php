<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    protected $table = 'job_listing';
    protected $fillable = ['title', 'salary']; //represents all attributes that are allowed to be mass assigned
}
