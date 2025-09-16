<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class SosController extends Controller
{  
    /**
     * SOS Trigger Function
     * Ye function frontend se latitude & longitude lega
     * aur ek test email bhej dega.
     */
    public function triggerSOS(Request $request)
    {
        // Step 1: Testing ke liye ek user le lete hain
        $user = User::first(); // abhi first user, baad me "auth()->user()" karenge

        // Step 2: Location request se lena
        $location = [
            'latitude' => $request->latitude ?? '31.5204',
            'longitude' => $request->longitude ?? '74.3587',
        ];

        // Step 3: Simple test email bhejna
        Mail::raw(
            "🚨 SOS Alert from {$user->name}\n".
            "Location: https://maps.google.com/?q={$location['latitude']},{$location['longitude']}\n".
            "Contact: {$user->email}",
            function ($message) use ($user) {
                // Apna email idhar daalo (testing ke liye)
                $message->to("muhammadhasanali021@gmail.com")
                        ->subject("🚨 SOS Test from {$user->name}");
            }
        );

        // Step 4: Response return karna
        return response()->json(['status' => '✅ SOS email sent successfully!']);
    }
}