<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ia extends Model
{
    use HasFactory;
    protected $table='ia';
    protected $fillable=['id','nom'];
    public $timestamps =false;

    public function checky($nom){
        $ia=Ia::where("nom","=",$nom)
            ->get();        
        if($ia->isEmpty()){
            $i=Ia::create([
                "nom"=>$nom,
            ]);
           
            return $i->id;
        }
        else{
            // dd($ia[0]->id);
            return $ia[0]->id;
        }
    }
}
