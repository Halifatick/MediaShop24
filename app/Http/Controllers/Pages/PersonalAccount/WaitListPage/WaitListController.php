<?php

namespace App\Http\Controllers\Pages\PersonalAccount\WaitListPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaitListController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.waitlist', compact('profile'));
    }
}
