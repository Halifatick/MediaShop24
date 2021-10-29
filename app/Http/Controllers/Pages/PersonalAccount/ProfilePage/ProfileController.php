<?php

namespace App\Http\Controllers\Pages\PersonalAccount\ProfilePage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        $username = Auth::user()->getAuthIdentifierName();
        return view('pages.profile', compact('profile', 'username'));
    }

    public function updateUserProfile(Request $request)
    {
        $profile = User::find($request->id);
        $validator = Validator::make($request->all(), [
            'firstname' => 'string|nullable|alpha',
            'lastname' => 'string|nullable|alpha',
            'phone' => 'string|min:18|max:19|nullable',
            'email' => 'required|string|email',
            'gender' => 'required',
            'status' => 'required',
            'employment' => 'required',
            'birthdate' => 'date|nullable'
        ]);
        if ($validator->fails()) {
            return response()->json(['newProfileUserError' => 'Ошибка. Проверьте правильность ввода'], 200);
        } else {
            $profile->email = $request->email;
            $profile->firstname = $request->firstname;
            $profile->lastname = $request->lastname;
            $profile->phone = $request->phone;
            $profile->gender = $request->gender;
            $profile->status = $request->status;
            $profile->employment = $request->employment;
            $profile->birthdate = $request->birthdate;
            $profile->save();
            return response()->json(['newProfileUserSuccess' => 'Успешно изменена информация в профиле'], 200);
        }
    }

    public function updateUserProfilePublic(Request $request)
    {
        $profile = User::find($request->id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'city' => 'string|nullable|alpha'
        ]);
        if ($validator->fails()) {
            return response()->json(['newProfileUserPublicError' => 'Ошибка. Проверьте правильность ввода'], 200);
        } else {
            $profile->name = $request->name;
            $profile->city = $request->city;
            $profile->save();
            return response()->json(['newProfileUserPublicSuccess' => 'Успешно изменена информация в профиле'], 200);
        }
    }

    public function updateUserProfilePassword(Request $request)
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

    public function updateUserProfileSubscription(Request $request)
    {
        $profile = User::find($request->id);
        $profile->subscription = $request->subscription;
        $profile->save();
        return response()->json(['newSubscription' => 'Успешно изменена подписка'], 200);
    }
}
