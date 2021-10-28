<?php

namespace App\Http\Controllers\Pages\IndexPage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('index', compact('profile'));
    }
    public function updateUserProfileNewPassword(Request $request)
    {
        $profile = User::find($request->id);
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json(['newPasswordError' => 'Новый пароль не совпадает'], 422);
        } else {
            $profile->password = Hash::make($request->password);
            $profile->save();
            return response()->json(['newPasswordSucceess' => 'Успешно изменён пароль'], 200);
        }
    }
}
