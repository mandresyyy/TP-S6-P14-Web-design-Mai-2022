<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $table='utilisateur';
    protected $fillable=['id','nom','prenom','pseudo','mdp'];

    public function login(){
        $adm=Utilisateur::where('nom','=',$this->nom)
            ->where('mdp','=',$this->mdp)
            ->get();
        
        if($adm->isEmpty()){
            return false;
        }
        else{
            return $adm;
        }


    }
}
