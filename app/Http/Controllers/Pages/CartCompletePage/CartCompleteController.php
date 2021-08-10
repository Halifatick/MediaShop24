<?php

namespace App\Http\Controllers\Pages\CartCompletePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartCompleteController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.cartcomplete', compact('profile'));
    }
}
