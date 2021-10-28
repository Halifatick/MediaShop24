<?php

namespace App\Http\Controllers\Pages\PersonalAccount\OrderDetailsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailsController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        $username = Auth::user()->getAuthIdentifierName();
        return view('pages.orderdetails', compact('profile','username'));
    }
}
