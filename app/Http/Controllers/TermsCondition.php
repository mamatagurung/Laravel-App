<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsCondition extends Controller
{
    //
    public function index(){
        return view('terms-and-condition');
    }
}
