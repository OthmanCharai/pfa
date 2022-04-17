<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    public function updateProfile(Request $request){
        $user=User::find(Auth::id());
        $userData=$request->only(['name','email','contact','language','country']);
        $entrepriseData=$request->only(['link','adresse']);
        if($request->hasFile('avatar')){
            $path=$request->file('avatar')->store('avatars');
            $userData['avatar']=$path;
        }
        $user->update($userData);
        $user->entreprise()->update($entrepriseData);
        // dump($userData);
        // dump($user);
        // $user->update($request);
        // dump($request);
        // dd($request->hasFile('avatar'));
        return redirect()->back();
    }
}
