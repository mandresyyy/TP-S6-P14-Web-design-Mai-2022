@extends("layouts.masteradmin")
@section("content")
<div class="page-container">
            <div class="page-content" style="margin-top: 30px;">
            <div class="card" style="text-align: center;">
                <h1 style="width:auto;">{{$title}}</h1>        
                              
            </div>
                <hr>
                <div class="row">  
                    @foreach($liste as $article)                     
                    <div class="col-lg-6">
                        <div class="card text-center mb-5">
                            <div class="card-header p-0">                                   
                                <div class="blog-media">
                                    <img src="{{asset('imgs/'.$article->photo)}}" alt="" class="w-100" height="300">
                                    <a href="#" class="badge badge-primary">{{$article->Ia->nom}}</a>        
                                </div>  
                            </div>
                            <div class="card-body px-0">
                                <h5 class="card-title mb-2">{{$article->titre}}</h5>    
                                <a href="#" class="text-dark small text-muted">Le</a>
                                <small class="small text-muted">
                                    {{$article->date}}
                                </small>
                                
                               
                            </div>
                            
                            <div class="card-footer p-0 text-center">
                                <a href="{{route('article_details',['id'=>$article->id])}}" class="btn btn-outline-dark btn-sm">READ MORE</a>
                                @if($article->valide==0)
                                <a href="{{route('post.confirm',['id'=>$article->id])}}" class="ml-4 btn btn-dark mt-1 btn-sm ">valider</a>
                                @endif
                            </div>                 
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                
                
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    {{$liste->links()}}
                </nav>
            </div>
        </div>
@endsection 