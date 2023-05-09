<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="IABlog est votre source fiable pour toutes les dernières nouvelles et développements en intelligence artificielle. Nous fournissons une couverture complète de l'actualité en IA, ainsi que des ressources pour ceux qui cherchent à en savoir plus sur cette technologie transformative. Restez à jour avec notre site sur l'IA.">
    <meta name="author" content="Devcrud">
    <title>Blog IA : Toutes les dernières actualités et avancées en Intelligence Artificielle</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + JoeBLog main styles -->
	<link rel="stylesheet" href="{{asset('css/joeblog.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('imgs/logo.svg')}}" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light bg-primary sticky-top">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">                     
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Acceuil_a')}}">Les articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('formulaire_article')}}">Créer article</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Les IA 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($lesia as $i)
                            <a class="dropdown-item" href="{{route('ia.article',['id'=>$i->id])}}">{{$i->nom}}</a>
                            @endforeach
                        </div>
                    </li>
                    
                </ul>
                <div class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{route('deconnecter')}}" class="ml-4 btn btn-dark mt-1 btn-sm">Se deconnecter</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Of Page Second Navigation -->
    
    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->

    <div class="container">
      @yield('content')
    </div>

    

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                    <img src="{{asset('imgs/logo.svg')}}" alt="" class="logo">
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <div class="socials">
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-facebook pr-1"></i> 123,345</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-twitter pr-1"></i> 321,534</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-pinterest-alt pr-1"></i> 543,312</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-instagram pr-1"></i> 123,023</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-youtube pr-1"></i> 231,043</a>
                    </div>
                </div>  
            </div>
        </div>      
    </footer>
    <!-- End of Page Footer -->
    
	<!-- core  -->
    <script src="{{asset('vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- JoeBLog js -->
    <script src="{{asset('js/joeblog.js')}}"></script>

</body>
</html>
