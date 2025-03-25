<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';
    //protected $fillable = ['employer_id', 'title', 'salary']; //represents all attributes that are allowed to be mass assigned
    protected $guarded = []; //this does not guard any field and makes all field fillable

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
