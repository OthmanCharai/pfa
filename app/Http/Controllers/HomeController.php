<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Entreprise;
use App\Models\Influencer;
use App\Models\Pack;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=Auth::user();

        if($user->role=='influencer'){
            return redirect()->route('influencers.pack');
        }else{
            if(!$user->entreprise){
                Entreprise::create(['user_id'=>Auth::user()->id]);
            }
            return redirect()->route('entreprises.profile.account');
        }
        // return view('home');
    }
    public function storePlan(Request $request){
        if(!count(Auth::user()->cards) && $request->plan!='free'){
            session()->flash('card','add a valid card first');
            // dd(count(Auth::user()->cards));
            return redirect()->back();
        }
        // dd('succes');
        $data=$request->except('_token');
        $data['user_id']=Auth::user()->id;
        Pack::create($data);
        $influencer['proposals']=$data['proposals'];
        $influencer['walet']=0;
        $influencer['nb_pub']=0;
        $influencer['earning']=0;
        $influencer['user_id']=Auth::user()->id;
        Influencer::create($influencer);
        // dd($data);
        return redirect()->route('influencers.profile.account');

    }
    public function storeCard(Request $request){
        // dd($request);
        $request->validate(
            [
                'card_number'=>'required|size:17|unique:cards',
                'name'=>'required|string',
                'exp_date'=>'required|size:5',
                'cvv'=>'required|size:3'
            ]
        );
        $data=$request->only(['card_number','name','exp_date','cvv']);
        $data['user_id']=Auth::id();
        if($request->has('is_primary') ){
            $data['is_primary']=true;
        }else{
            $data['is_primary']=false;
        }
        Card::create($data);
        return redirect()->back();
        // dd($data);

    }
    public function deleteCard($id){
        Card::destroy($id);
        return redirect()->back();
    }
    public function updatePlan(Request $request){
        if($request['choosePlan']=='free'){
            $data=[
                'proposals'=>'100',
                'plan'=>'free',
                'prix'=>0

            ];
        }else if($request['choosePlan']=='standard'){
            $data=[
                'proposals'=>'500',
                'plan'=>'standard',
                'prix'=>49
            ];
        }else{
            $data=[
                'proposals'=>'1000',
                'plan'=>'premium',
                'prix'=>84

            ];
        }
        $data['user_id']=Auth::id();
        $data['payement_date']=now();
        $user=Auth::user();
        $user->pack->update($data);
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
