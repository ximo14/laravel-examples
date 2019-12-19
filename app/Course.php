<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = 'course';

    protected $fillable = ['name'];

    // public function student()
    // {
    //     return $this->hasOne('App\Student');
    // }

    
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
