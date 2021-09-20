<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BCAsubjectscontroller extends Controller
{
    public function firstsemsubject()
    {
        return view('BCAsubjects.firstsemsubject');
    }

    public function secsemsubject(){
        return view('BCAsubjects.secsemsubject');
    }
}
