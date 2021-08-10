<?php

namespace App\Http\Controllers\Pages\CatalogMainPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogMainController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.catalogmain', compact('profile'));
    }
}
