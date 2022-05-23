<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Entreprise;
use App\Models\Influencer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function get_applied_products(){
        $user=Auth::user();
        if($user->role=="entreprise"){
            $products=Product::where('user_id',$user->id)->get();
            return view('entreprises.profile.applied_products',[
                'products'=>$products,
            ]);
        }
    }


    public function approve_application($id){

        $application=DB::table('product_user')->where('id',$id)->get();
        $product=Product::where('id',$application[0]->product_id)->first();
        $product->commands()->sync([
            $application[0]->user_id => [
                'status' => 1
            ],
        ]);
        $candidate=Influencer::where('user_id',$application[0]->user_id)->first();
        $candidate->proposals=$candidate->proposals+10;
        $candidate->walet= $candidate->walet+$product->publishing_price;
        $candidate->save();
        $products=Product::where('user_id',Auth::user()->id)->get();
        return view('entreprises.profile.applied_products',[
            'products'=>$products,
        ]);
    }

    public function decline_application($id){

        $application=DB::table('product_user')->where('id',$id)->get();
        $product=Product::where('id',$application[0]->product_id)->first();
        $product->commands()->sync([
            $application[0]->user_id => [
                'status' => 0
            ],
        ]);
      
        $products=Product::where('user_id',Auth::user()->id)->get();
        return view('entreprises.profile.applied_products',[
            'products'=>$products,
        ]);
    }


}
