<?php

namespace App\Http\Controllers\Pages\HelpPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelpController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.help', compact('profile'));
    }
}
