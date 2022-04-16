<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InfluencerController extends Controller
{
    public function updateProfile(Request $request){
        $user=User::find(Auth::id());
        $userData=$request->only(['name','email','contact','language','country']);
        $influencerData=$request->only(['link','category']);
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('avatars');
            $userData['avatar']=$path;
        }
        $user->update($userData);
        $user->influencer()->update($influencerData);
        // dump($userData);
        // dump($user);
        // $user->update($request);
        // dump($request);
        // dd($request->hasFile('avatar'));
        return redirect()->back();
    }
    public function updatePassword(Request $request){
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user=User::find(Auth::id());
        $user->update(['password'=>Hash::make($request['password'])]);
        // dd(Hash::make($request['password']));
        return redirect()->back();
    }
}
