<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_name',
        'f_name',
        'r_number',
        'class',
        'session',
        'year',
    ];
}

