<?php

namespace App\Http\Controllers;

use App\Http\Requests\test;
use Illuminate\Http\Request;

class UserBlock extends Controller
{
    public function save (test $request)
    {
    	dd('Authorized');
    }
}
