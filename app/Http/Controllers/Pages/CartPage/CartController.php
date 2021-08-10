<?php

namespace App\Http\Controllers\Pages\CartPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.cart', compact('profile'));
    }
}
