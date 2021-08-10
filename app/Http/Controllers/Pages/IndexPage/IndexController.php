<?php

namespace App\Http\Controllers\Pages\IndexPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('index', compact('profile'));
    }
}
