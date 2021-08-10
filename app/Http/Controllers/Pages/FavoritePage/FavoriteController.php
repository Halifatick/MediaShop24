<?php

namespace App\Http\Controllers\Pages\FavoritePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.favorite', compact('profile'));
    }
}
