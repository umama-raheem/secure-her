<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('Admin.index');
    }
    public function policeDashbaord(){
        return view('police.dashboard');
    }
    public function familyDashbaord(){
        return view('family.dashboard');
    }
}
