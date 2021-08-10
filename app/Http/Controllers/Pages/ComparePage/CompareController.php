<?php

namespace App\Http\Controllers\Pages\ComparePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.compare', compact('profile'));
    }
}
