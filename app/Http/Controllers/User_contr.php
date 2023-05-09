<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Ia;
use Illuminate\Http\Request;

class User_contr extends Controller
{
    function Acceuil(){
       
        $liste=Article::where("valide","=","1")
        ->orderBy('date_validation','desc')
        ->paginate(2);
        $title='Actualité IA';
        $ia=Ia::all();
        // dd(session()->get('user_id'));
        return view("acceuil_users",compact("liste","title"))->with('lesia',$ia);
    }

    function Mesarticles(){
       
        $liste=Article::where("utilisateur_id","=",session()->get('user_id'))
        ->orderBy('date','desc')
        ->paginate(2);
        $title='Mes articles';
        $ia=Ia::all();
        // dd(session()->get('user_id'));
        return view("acceuil_users",compact("liste","title"))->with('lesia',$ia);
    }

    function Article_info($id){
      
        $Post=Article::find($id);
        $ia=Ia::all();
        return view("ArticleInfo_user",compact("Post"))->with('lesia',$ia);  
    }

    public function getByid($id){
      
        $liste=Article::where("ia_id","=",$id)
                ->paginate(2);
        $ti=Ia::find($id);
        $title='Les articles sur '.$ti->nom;
        $ia=Ia::all();
        return view("acceuil_users",compact("liste","title"))->with('lesia',$ia);  
    }
    public function formulaire(){
        if(session()->get('user_id')==null)
        {
            return redirect()->route('form_log');
        }
       
        $ia=Ia::all();
        return view("Form_article")->with('lesia',$ia);

    }

    public function publier(Request $request){
        $request ->validate([
            "ia"=>"required",
            "titre"=>"required",
            "description"=>"required",
            "photo"=>"required",
        ]);

        if($request->hasFile('photo')){
            $photo=$request->file('photo');
            $filename=time().'.'.$photo->getClientOriginalName();
            // dd($filename," name ",$photo->getClientOriginalname());
           $photo->move(public_path('imgs'),$filename);
        //    dd($filename);
            $i=new Ia();
            $ia=$i->checky($request->ia);
            //  dd($ia[0]->id);
            $article=Article::create([
                "ia_id"=>$ia,
                "utilisateur_id"=>session()->get('user_id'),
                "titre"=>$request->titre,
                "description"=>$request->description,
                "photo"=>$filename,
            ]);
        }


        return back()->with("success","succes");
    }
}
