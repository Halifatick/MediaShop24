<?php

namespace App\Http\Controllers\Pages\Cart1Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cart1Controller extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.cart1', compact('profile'));
    }
}
