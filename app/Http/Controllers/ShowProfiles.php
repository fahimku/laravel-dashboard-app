<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class ShowProfiles extends Controller
{
    //
    function list()
    {
    	return Student::all();
    }
}
