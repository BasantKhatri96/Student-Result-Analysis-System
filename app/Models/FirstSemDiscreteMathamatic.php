<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstSemDiscreteMathamatic extends Model
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
