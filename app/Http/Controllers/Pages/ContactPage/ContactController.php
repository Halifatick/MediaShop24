<?php

namespace App\Http\Controllers\Pages\ContactPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.contact', compact('profile'));
    }
}
