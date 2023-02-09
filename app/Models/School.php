<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    use HasFactory;

    protected $fillable = [
        'sname', 'address', 'mobile', 'fax'
    ];

    protected $primaryKey = "school_id";

    function student(){
        return $this->hasMany('App\Models\Student','school_id','school_id');
    }
}
