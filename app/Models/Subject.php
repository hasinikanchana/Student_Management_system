<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'sname', 'code', 'credit', 'hour'
    ];

    protected $primaryKey = "subject_id";

    public function teacher(){
        return $this->hasMany('App\Models\Teacher','subject_id','subject_id');
    }

    public function tea(){
        return $this->belongsTo(Teacher::class);
    }
}
