<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $timestamp = false;
    protected $table='admin';
    protected $fillable=['id','identifiant','mdp'];

    public function login(){
        $adm=Admin::where('identifiant','=',$this->identifiant)
            ->where('mdp','=',$this->mdp)
            ->get();
        
        if($adm->isEmpty()){
            return false;
        }
        else{
            return true;
        }


    }
}
