<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function grade()
    {
        return $this->hasMany('App\Models\Grade','grade_id','grade_id');
    }

    public function school()
    {
        return $this->hasMany('App\Models\School','school_id','school_id');
    }


    use HasFactory;

    protected $fillable = [
        'name', 'class', 'educationdetail', 'personaldetail', 'freesdetail','grade_id','school_id'
    ];
    protected $primaryKey = "student_id";

}
