<?php

namespace App\Http\Controllers\Pages\PersonalAccount\OrderListPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderListController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        $username = Auth::user()->getAuthIdentifierName();
        return view('pages.orderlist', compact('profile','username'));
    }
}
