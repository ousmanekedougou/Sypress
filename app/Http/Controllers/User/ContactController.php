<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\ContactNotification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('users.contact');
    }

    public function store(Request $request)
    {
        $user = User::first();
        // dd($user);
        $user->notify(new ContactNotification($request->name,$request->email,$request->subject,$request->msg));
        return back();
    }
}
