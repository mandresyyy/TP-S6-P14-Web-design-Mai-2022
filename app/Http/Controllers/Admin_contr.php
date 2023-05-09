<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Ia;
use Carbon\Carbon;
use Illuminate\Http\Request;

 class Admin_contr extends Controller
{
    public function acceuil(){
        $liste=Article::where("valide","=","1")
                ->orderBy('date_validation','desc')
                ->paginate(2);
        $title='Les articles IA';
        $ia=Ia::all();
        return view("acceuil_admin",compact("liste","title"))->with('lesia',$ia);     
        
    }
    public function Attente(){
        $liste=Article::where("valide","=","0")
                ->orderBy('date','asc')
                ->paginate(2);
        $title='Les articles en attente';
        $ia=Ia::all();
        return view("acceuil_admin",compact("liste","title"))->with('lesia',$ia);     
        
    }
    public function getByid($id){
        $liste=Article::where("ia_id","=",$id)
                ->paginate(2);
        $ti=Ia::find($id);
        $title='Les articles sur '.$ti->nom;
        $ia=Ia::all();
        return view("acceuil_admin",compact("liste","title"))->with('lesia',$ia);  
    }

    public function getPost($id){
        $Post=Article::find($id);
        $ia=Ia::all();
        return view("ArticleInfo_admin",compact("Post"))->with('lesia',$ia);  
    }

    public function confirm($id){
        $post=Article::find($id);
        $post->update(
            [
                'id'=>$id,
                'valide'=>1,
                'date_validation'=>Carbon::today()->format('Y-m-d')
            ]
        );
        return redirect()->route('Acceuil_a');
    }
    public function formulaire(){
       
       
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
                "utilisateur_id"=>1,
                "titre"=>$request->titre,
                "description"=>$request->description,
                "photo"=>$filename,
                "valide"=>1,
                "date_validation"=>Carbon::today()->format('Y-m-d'),
            ]);
        }


        return back()->with("success","succes");
    }
}
