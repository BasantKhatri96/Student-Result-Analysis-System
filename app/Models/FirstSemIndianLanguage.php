<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstSemIndianLanguage extends Model
{
    use HasFactory;

    protected $fillable =[
        'Student_name',
        'Reg_No',
        'U1',
        'IA1',
        'U2',
        'IA2'
    ];
}
