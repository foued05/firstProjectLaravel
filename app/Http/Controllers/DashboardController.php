<?php

namespace App\Http\Controllers;

use App\Models\Achat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class DashboardController extends Controller
{
    public function index(){

        $user = Auth::user();

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
}
