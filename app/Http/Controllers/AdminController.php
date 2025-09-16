<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function indexpage(){
        return view('Admin.index');
    }

    function footer(){
        return view('Admin.footer');
    }

    function safetytip(){
        return view('Admin.add_safetytip');
    }

    function safetytiptable(){
        return view('Admin.safetytip_table');
    }
    function profilepage(){
        return view('Admin.profile');
    }

    function rtlpage(){
        return view('Admin.rtl');
    }

    function sign_uppage(){
        return view('Admin.sign-up');
    }

    function sign_inpage(){
        return view('Admin.sign-in');
    }

    function tablespage(){
        return view('Admin.tables');
    }

    function virtual_realitypage(){
        return view('Admin.virtual-reality');
    }
}
