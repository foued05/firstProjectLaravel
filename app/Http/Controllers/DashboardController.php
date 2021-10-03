<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Achat;
use Illuminate\Http\Request;
use App\Models\Notifications;
use Illuminate\Support\Facades\Auth;
use App\Notifications\buyNotification;
use App\Http\Requests\Auth\LoginRequest;
use App\Notifications\UserRegistredNotification;

class DashboardController extends Controller
{
    public function index(){

        $user = Auth::user();

        if($user->tyype == "A"){

            $users = User::all();
            $not=0;
            foreach($users as $user){
                $not += $user->unreadNotifications()->count();
            }
            
            return view('dashAdmin',[
                'not' => $not
            ]);

        }

        return view('dashboard',[
            'user' => $user
        ]);
    }

    public function buy($montant,$libelle_achat){

        $user = Auth::user();
        if($user->montant - $montant >0){
            $user->montant = $user->montant - $montant;
            $user->save();
        }else{
            dd("insufficient balance");
        }

        $user->notify(new buyNotification($user,$libelle_achat));

        Achat::create([
            'libelle_achat' => $libelle_achat,
            'user_id' => $user->id,
        ]);
        
        return redirect('/dashboard');
    }

    public function hist(){

        $user = Auth::user();
        $achats=Achat::where('user_id', '=', $user->id)->get();

        return view('historique',[
            'achats' => $achats
        ]);

    }

    public function dashNot(){

        $users = User::all();

        return view('dashNot',[
            'users' => $users
        ]);
    }
}
