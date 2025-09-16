<?php

namespace App\Http\Controllers;
use App\Models\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function indexPage(){
        return view('Frontend.index');
    }

    function featuresPage(){
        return view('Frontend.features');
    }   
   
    
    function tipsPage(){
        return view('Frontend.tips');
    }   

    
public function impactPage() {
    return view('frontend.impact'); // folder ka naam dot se separate
}

  public function contactPage() {
    return view('frontend.contact'); // agar contact.blade.php hai
}

    function AdminPage(){
        return view('Admin.dashboard');
    }

    function UserPage(){
        return view('Admin.users');
    }

   
    function FamilyDashbord(){
        return view('familyDashboard');
    }
     function policeDashbord(){
        return view('policeDashboard');
    }
}
