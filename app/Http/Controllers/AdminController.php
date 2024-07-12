<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function bandara(){
        return view('admin.index-bandara');
    }
}
