<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function send(Request $request)
    {

        // For now just return success
        // Later we can store in DB or send email

        return back()->with('success', true);
    }
}
