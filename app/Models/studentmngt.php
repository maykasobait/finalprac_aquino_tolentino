<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentmngt extends Model
{
        use HasFactory;
    protected $table = 'student_tbl';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dob',
    ];
}
