<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'gname', 'description'
    ];

    protected $primaryKey = "grade_id";

    function student(){
        return $this->hasMany('App\Models\Student','grade_id','grade_id');
    }
}
