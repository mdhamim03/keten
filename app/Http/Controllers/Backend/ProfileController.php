<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Helpers\mediaUplode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use mediaUplode;
    function profilePage() {
        return view('backend.profile');
    }
    //*Profiel Uopdate and image validation usaing thrait
    function profileUpdate(Request $request) {
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'profile_img' => 'nullable|mimes:jpg'
        ],[
            'name.required' => 'enter your user name',
        ]);
        //*Prifile image configration
        if($request->hasFile('profile_img')){
            $profileImage = $this->uplodeSingleMedia($request->profile_img,'users');
        }
        //*update file and image 
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile_img = $profileImage['fileName'];
        $user->profile_img_url = $profileImage['fileUrl'];
        $user->save();
        return back();

    }
    //*Password Update and Resate
    function passwordUpdate(Request $request){
        $request->validate([
            'oldPassword' => 'required|current_password:web',
            'password' => 'required|min:8|different:oldPassword|confirmed'
        ]);
        //*update
        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return back();
    }
}
