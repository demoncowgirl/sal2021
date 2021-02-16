<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

function credentials(Request $request)
{

    // Retrieve the currently authenticated user...
    $user = Auth::user();

    if (Auth::check()) {
     return redirect ('welcome')-> flash('status', 'You have been loggedin successfully!');
;
    }
}
