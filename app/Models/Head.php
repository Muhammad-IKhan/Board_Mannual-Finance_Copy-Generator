<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;
    protected $fillable = [
        // ... your existing fillable fields ...
        // 'document_count',
        // 'paper_count',
    ];

}
