<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';
    protected $fillable = ['title', 'salary']; //represents all attributes that are allowed to be mass assigned

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
