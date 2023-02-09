<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    public function grade()
    {
        return $this->hasMany(Grade::class);
    }

    public function subject()
    {
        return $this->hasMany(Subject::class);
    }
    
    use HasFactory;

    protected $fillable = [
        'name', 'class', 'education', 'grade_id', 'subject_id'
    ];
    protected $primaryKey = "teacher_id";
}
