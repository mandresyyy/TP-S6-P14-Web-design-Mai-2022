@extends("layouts.masteradmin")
@section("content")
<div class="page-container">
            <div class="page-content">
                <div class="card">
                    <div class="card-header pt-0">
                        <br>
                        <h3 class="card-title mb-4">{{$Post->titre}}</h3>
                        <div class="blog-media mb-4">
                            <img src="{{secure_asset('imgs/'.$Post->photo)}}" alt="" class="w-100">
                            <a href="#" class="badge badge-primary">{{$Post->Ia->nom}}</a> 
                        </div>  
                        <small class="small text-muted">
                            <a href="#" class="text-muted"></a>
                            <span class="px-2">#</span>
                            <span>{{$Post->date}}</span>
                            
                        </small>
                    </div>
                    <div class="card-body border-top">
                        <p class="my-3">
                        {!!$Post->description!!}
                        </p>   
                        @if($Post->valide==0)
                        <a href="{{route('post.confirm',['id'=>$Post->id])}}" class="ml-4 btn btn-dark mt-1 btn-sm ">valider</a>
                        @endif
                    </div>
                    
                                      
                </div> 

            </div>
            <!-- Sidebar -->
            <div class="page-sidebar">
                
               
            </div>
</div>
@endsection