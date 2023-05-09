<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table='article';
    protected $fillable=['id','ia_id','utilisateur_id','titre','description','date','valide','date_validation','photo'];
    public $timestamps =false;
    public function Utilisateur(){
        return $this->belongsTo(Utilisateur::class,'utilisateur_id');
    }

    public function Ia(){
        return $this->belongsTo(Ia::class,'ia_id');
    }

    
}
