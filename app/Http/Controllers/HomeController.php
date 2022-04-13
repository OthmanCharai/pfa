<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Entreprise;
use App\Models\Influencer;
use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('influencers.pack');
        }else{
            Entreprise::create(['user_id'=>Auth::user()->id]);
            return view('entreprise.profile.account');
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
        $request->validate(
            [
                'card_number'=>'required|size:17',
                'name'=>'required|string',
                'exp_date'=>'required|size:5',
                'cvv'=>'required|size:3'
            ]
        );
        $data=$request->except('_token');
        $data['user_id']=Auth::id();
        $data['is_primary']=true;
        Card::create($data);
        return redirect()->back();
        // dd($data);

    }
}
