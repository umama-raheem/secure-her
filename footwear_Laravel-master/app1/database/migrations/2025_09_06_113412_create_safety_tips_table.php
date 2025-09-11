<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SosAlertMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class SosController extends Controller
{
    public function triggerSOS(Request $request)
    {
        $user = auth()->user();

        // Location frontend se aayegi
        $location = [
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ];

        // Emergency contacts fetch
        $contacts = $user->emergencyContacts; // relation User model me banani hogi

        foreach ($contacts as $contact) {
            if ($contact->email) {
                Mail::to($contact->email)->send(new SosAlertMail($user, $location));
            }
        }

        // Police ko bhi bhejna
        $policeEmails = User::where('role', 'police')->pluck('email');
        foreach ($policeEmails as $email) {
            Mail::to($email)->send(new SosAlertMail($user, $location));
        }

        return response()->json(['status' => 'SOS emails sent successfully!']);
    }
}