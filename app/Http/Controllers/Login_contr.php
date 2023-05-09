<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Utilisateur;


class Login_contr extends Controller
{
    public function log_admin(Request $request){
        $adm=new Admin;
        $adm->identifiant=$request->nom;
        $adm->mdp=$request->mdp;
        $v=$adm->login();
        
       
       return $v;
    }
    public function log_utilisateur(Request $request){
        $adm=new Utilisateur;
        $adm->nom=$request->nom;
        $adm->mdp=$request->mdp;
        $v=$adm->login();
        
       
       return $v;
    }
    public function to_log(Request $request){
        if($request->admin==true){
            $v=$this->log_admin($request);
            if($v==true){
                return redirect()->route('Acceuil_a');
            }
           else{
            return back()->with("erreur","Information incorrect.");
           }
          
        }
        else{
            return back()->with("erreur","Information incorrect.");
        }
       
    }
    public function deconnex(){
        session()->flush();
        return redirect()->route('Acceuil_u');
    }
}
